<?php
namespace app\components;
use app\components\tona\Cons;
use app\components\tona\Helper;
use app\forms\RegisterCompanyForm;
use app\forms\RegisterForm;
use app\models\System;
use app\models\UserOnline;
use Carbon\Carbon;
use yii\base\Widget;
use Yii;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/12/2016
 * Time: 8:20 PM
 */
class UserOnlineWidget extends Widget
{
	public $message;
	public static $statistics = [];
	public static $total = 0;
	public function init()
	{
		parent::init();
	}

	public function run()
	{
		$model = new RegisterForm();
		return $this->render('sign-up/form-signup', ['model' => $model]);
	}

	public static function userOnline(){
		if (!isset($_SESSION)) {
			session_start();
		}
		$session = session_id();
		if (self::check($session) == false) {
			$u = new UserOnline();
			$u->session = $session;
			$u->time = Carbon::now()->format(Cons::SQL_DATE_TIME);
			$u->browser = Helper::getBrowser();
			$u->url = Helper::getCurrentUrl();
			$u->ip = Helper::getIpClient();
			$u->controller = Yii::$app->controller->id;
			$u->action = Yii::$app->controller->action->id;
			$u->method = Helper::getMethod();
			$u->save();
		}

	}

	/**
	 * @return \stdClass
	 */
	public static function getStatistic(){
		self::userOnline();

		if(!self::$statistics){
			self::$statistics = self::countUserOnline();
		}

		return Helper::arrayToObject(self::$statistics);
	}

	/**
	 * @param $session
	 * @return bool
	 */
	public static function check($session){
		$time = Carbon::now()->timestamp - 600;
		$timeCheck = Carbon::createFromTimestamp($time)->format(Cons::SQL_DATE_TIME);
		$uo = UserOnline::find()->where(['session' => $session])->andWhere("time > '$timeCheck'")->one();
		if($uo){
			$uo->time = Carbon::now()->format(Cons::SQL_DATE_TIME);
			$uo->save();
			return true;
		}
		return false;
	}

	/**
	 * @return array
	 */
	public static function countUserOnline(){
		$lastWeek = Carbon::now()->subDay(7)->timestamp;
		$lastMonth = Carbon::now()->subDay(30)->timestamp;
		$today = Carbon::createFromFormat(Cons::SQL_DATE_TIME, date('Y-m-d'). ' 00:00:00')->timestamp;

		$week = 0;
		$month = 0;
		$day = 0;

		$us = UserOnline::find()->all();

		if($us){
			foreach($us as $value){
				$time = Carbon::createFromFormat(Cons::SQL_DATE_TIME, $value->time)->timestamp;
				if($time > $lastWeek){
					$week += 1;
				}
				if($time > $lastMonth){
					$month += 1;
				}
				if($time > $today){
					$day +=1;
				}
			}
		}
		self::$total = $month + System::find()->where(['code' => 'user_online_total'])->count();
		return [
			'today' => $day,
			'week' 	=> $week,
			'month' => $month,
			'total' => self::$total
		];
	}

	public static function test(){

		for($i=1; $i < 700000; $i++) {
			$u = new UserOnline();
			$u->session = md5(rand(111,999));
			$u->time = Carbon::now()->format(Cons::SQL_DATE_TIME);
			$u->browser = Helper::getBrowser();
			$u->url = Helper::getCurrentUrl();
			$u->ip = Helper::getIpClient();
			$u->controller = Yii::$app->controller->id;
			$u->action = Yii::$app->controller->action->id;
			$u->method = Helper::getMethod();
			$u->save();
		}
	}

	public static function clearUserOnline(){
		$total = count(UserOnline::find()->all()) - self::getStatistic()->month;
		$s = System::find()->where(['code' => 'user_online_total'])->one();
		$s->value_number = $s->value_number + $total;
		$s->save();

		$lastMonth = Carbon::now()->subDay(30)->format(Cons::SQL_DATE_TIME);
		$sql = "DELETE FROM tn_user_online WHERE time < '$lastMonth'";
		Yii::$app->db->createCommand($sql)->query();


	}
}