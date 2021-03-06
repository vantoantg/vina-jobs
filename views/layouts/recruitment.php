<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\components\tona\Common;
use app\components\tona\Login;
use \app\components\tona\Helper;
use app\assets\AppAsset;


$this->title = 'Vina-jobs | Tona Nguyen';
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<title>Vina-jobs | Tona Nguyen</title>-->
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel='shortcut icon' type='image/x-icon' href='<?= \app\components\tona\Helper::siteURL() ?>/favicon.ico' />

        <!-- Yoast SEO plugin. -->
        <meta name="description" content="Website tìm kiếm việc làm."/>
        <meta name="robots" content="noodp"/>
        <link rel="canonical" href="http://vina-jobs.com/" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Việc làm cho sinh viên mới ra trường." />
        <meta property="og:description" content="Việc làm lương cao" />
        <meta property="og:url" content="http://vina-jobs.com/" />
        <meta property="og:site_name" content="Jobs" />
        <meta property="article:author" content="http://vina-jobs.com/" />
        <meta property="article:section" content="Jobs, việc làm, nghề nghiệp" />
        <meta property="article:published_time" content="2015-12-12T14:08:51+00:00" />
        <meta property="article:modified_time" content="2015-12-12T18:19:26+00:00" />
        <meta property="og:updated_time" content="2015-12-12T18:19:26+00:00" />
        <meta property="fb:admins" content="tonanguyen" />
        <meta property="og:image" content="http://vina-jobs.com/" />
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:description" content="Tìm kiếm việc làm, việc làm lương cao"/>
        <meta name="twitter:title" content="Website tìm kiếm việc làm"/>
        <meta name="twitter:site" content="@Jobs"/>
        <meta name="twitter:image" content="http://vina-jobs.com/"/>
        <meta name="twitter:creator" content="@Jobs"/>
        <!-- / Yoast SEO plugin. -->

        <!--Core CSS -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body >
    <?php
    if(Login::checked()){

    }else{
        echo '<pre>';
        print_r(3);
        echo '</pre>';
        die;
        echo \app\components\LoginWidget::widget(['message' => '']); /* Use: data-toggle="modal" data-target="#signup-modal" */
        echo \app\components\SignUpWidget::widget(['message' => '']); /* Use: data-toggle="modal" data-target="#login-modal" */
        echo '<pre>';
        print_r(1);
        echo '</pre>';
        die;
        echo \app\components\SignUpWidget::signupCompany(); /* Use: data-toggle="modal" data-target="#login-modal" */
    }
    ?>

    <!-- Header Section Start -->
    <header id="header">
        <!-- Menu Start -->
        <div class="menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse mainnavmenu" id="bs-example-navbar-collapse-1">
                                    <div id="menu-center">
                                        <ul class="nav navbar-nav navbar-right mainnav">
                                            <li><a href="<?= Helper::siteURL() ?>" >Trang chủ</a></li>
                                            <li><a href="#welcome_section">Giới thiệu</a></li>
                                            <li><a href="#email_subscribe_section">Jobs</a></li>
                                            <li>
                                                <?= Html::a('Post a job', ['/job/post'], ['data' => ['method' => 'post']]) ?>
                                            </li>
                                            <li><a href="#contact_section">Canddiate</a></li>
                                            <li>
                                                <?= Html::a('Post a resume', ['/resume/create'], ['data' => ['method' => 'post']]) ?></li>
                                            <?php if(Login::checked()){ ?>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hồ sơ <span class="caret"></span></button></a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-header">ĐANG LOGIN: <?= strtoupper(Common::currentUser('name')) ?></li>
                                                    <li><?= Html::a('Trang cá nhân', ['/'.Common::currentUser('username').'/profile.html'], ['data' => ['method' => 'post']]) ?></li>
                                                    <li><a href="#">Đổi mật khẩu</a></li>
                                                    <li><?= Html::a('Sự kiện', ['/profile/events.html']) ?></li>
                                                    <li class="divider"></li>
                                                    <li><?= Html::a('Logout ( ' . Common::currentUser('name') .' )', ['/admin/login/logout'], ['data' => ['method' => 'post']]) ?></li>
                                                </ul>
                                            </li>
                                            <?php }else{ ?>
                                            <li>
                                                <?= Html::a('Signup', ['#'], ["data-toggle" => "modal",  "data-target" => "#signup-modal"]) ?>
                                                </li>
                                                <li>
                                                <?= Html::a('Login', ['#'], ["data-toggle" => "modal",  "data-target" => "#login-modal"]) ?>
                                            </li>
                                            <?php } ?>
                                            <li><a href="#contact_section">Liên hệ</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End-->
    </header>
    <!-- Header Section End -->

    <!-- content_page Section Start -->
    <section id="content_page">
        <?= $content ?>
    </section>
    <!-- content_page Section End -->

    <!-- Contact Section Start -->
    <section id="contact_section">
        <div class="contact_section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="section-title">
                                <h2>Contact us.</h2>
                                <p>Bạn cũng có thể liên hệ với chúng tôi để được giúp đỡ hoặc đóng góp ý kiến của bạn.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="address_part">
                                    <div class="address">
                                        <i class="fa fa-map-marker"></i> GO DAU <br/> F.TAN QUI <br/> Q.TAN PHU <br/> TP.HO CHI MINH
                                    </div>
                                    <div class="phone">
                                        <i class="fa fa-phone"></i> +84 932 252 414
                                    </div>
                                    <div class="email">
                                        <i class="fa fa-envelope-o"></i> nguyennguyen.vt88@gmail.com
                                    </div>
                                    <div class="social_icons">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook" data-rel="tooltip" class="icon_fb" ><i class="fa fa-facebook-square"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter" data-rel="tooltip" class="icon_twitter"><i class="fa fa-twitter-square"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Google+" data-rel="tooltip" class="icon_gplus"><i class="fa fa-google-plus-square"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Linkdin" data-rel="tooltip" class="icon_linkdin"><i class="fa fa-linkedin-square"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Youtube" data-rel="tooltip" class="icon_youtube"><i class="fa fa-circle fa-youtube-square"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Vimeo" data-rel="tooltip" class="icon_vimeo"><i class="fa fa-vimeo-square"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="contact_form">
                                    <div id="show_contact_msg"></div>
                                    <!-- Contact Form Start -->
                                    <form method="post" id="contact_form" action="contact.php">
                                        <input type="text" id="contact_name" name="name" class="form-control contact_input_box wow fadeInUp" placeholder="Name" required/>
                                        <input type="email" id="contact_email" name="email" class="form-control contact_input_box wow fadeInUp" placeholder="E-mail" required/>
                                        <textarea id="contact_text" name="message" rows="5" cols="30" class="form-control contact_input_box wow fadeInUp" placeholder="Message" required></textarea>
                                        <button type="submit" class="btn btn-primary contact_button wow fadeInUp"> <i class="fa fa-send-o"></i>  Send message</button>
                                    </form>
                                    <!-- Contact Form End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>