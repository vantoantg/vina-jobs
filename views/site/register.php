<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="banner_1">
    <div class="container">
        <div id="search_wrapper1">
            <div id="search_form" class="clearfix">
                <h1>Start your job search</h1>
                <p>
                    <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
                    <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
                    <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="single">
        <div class="form-container">
            <h2>Register Form</h2>
            <?php $form = ActiveForm::begin(); ?>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="firstName">First Name</label>
                        <div class="col-md-9">
                            <?= $form->field($model, 'first_name')->textInput()->label(false) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="lastName">Last Name</label>
                        <div class="col-md-9">
                            <?= $form->field($model, 'last_name')->textInput()->label(false) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="lastName">Mobile Number</label>
                        <div class="col-md-9">
                            <?= $form->field($model, 'phone')->textInput()->label(false) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="sex">Sex</label>
                        <div class="col-md-9" class="form-control input-sm">
                            <div class="radios">
                                <label for="radio-01" class="label_radio">
                                    <?= $form->field($model, 'gender')->radio(['label' => 'Male', 'value' => 1, 'class' => 'icheck'])->label(false) ?>
                                </label>
                                <label for="radio-02" class="label_radio">
                                    <?= $form->field($model, 'gender')->radio(['label' => 'Female', 'value' => 2, 'class' => 'icheck'])->label(false) ?>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="dob">Date of birth</label>
                        <div class="col-md-9">
                            <?= $form->field($model, 'last_name')->textInput()->label(false) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="username">Email</label>
                        <div class="col-md-9">
                            <?= $form->field($model, 'username')->textInput()->label(false) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="email">Password</label>
                        <div class="col-md-9">
                            <?= $form->field($model, 'password')->passwordInput()->label(false) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="country">Country</label>
                        <div class="col-md-9">

                            <?php
                            $country = \yii\helpers\ArrayHelper::map(\app\models\Locations::getList(), 'id','name');
                            echo $form->field($model, 'country')->dropDownList($country,
                                ['prompt'=>'Select...']
                            )->label(false);
                            ?>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="country">Work Experience</label>
                        <div class="col-md-9">
                            <select path="country" id="country" class="form-control input-sm">
                                <option value="">Select</option>
                                <option value="">Fresher</option>
                                <option value="">0</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">10</option>
                                <option value="">11</option>
                                <option value="">12</option>
                                <option value="">13</option>
                                <option value="">14</option>
                                <option value="">15</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="country">Education</label>
                        <div class="col-md-9">
                            <select path="country" id="country" class="form-control input-sm">
                                <option value="">Select</option>
                                <option value="">High School</option>
                                <option value="">University/College Level</option>
                                <option value="">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="subjects">About me</label>
                        <div class="col-md-9 sm_1">
                            <?= $form->field($model, 'about')->textarea(['class' => '', 'cols' => "77", 'rows' => "6"])->label(false) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-actions floatRight">
                        <input type="submit" value="Register" class="btn btn-primary btn-sm">
                    </div>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>