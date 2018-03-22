<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<?php $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => Url::to(['/icon.png'])]); ?>
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/swiper.css" rel="stylesheet">
    <!--  Scripts    -->
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/swiper.js"></script>

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <nav class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps--abv">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <a class="navbar-brand mx-auto" href="/"><span>Оператор Транспортных систем</span></a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"> <a class="nav-link" href="/">Главная</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/contact">Контакты</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/support">Поддержка</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/about">О компании</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/product">Продукт</a> </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="banner">
        <div class="contacts">
            <div class="container">
                <div class="row">
                    <div class="item"><a href="tel:+79085977000"><i class="fa fa-phone"></i> +7 (908) 597 70 00</a></div>
                    <div class="item"><a href="mailto: operatorts@mail.ru"><i class="fa fa-envelope"></i> operatorts@mail.ru</a>
                    </div>
                    <div class="item"><a href="/contact"><i class="fa fa-envelope-open"></i> Обратная связь</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<section class="about-sec parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2><small>Внедрение системы автоматизации оплаты проезда включает в себя:</small></h2>
                </div>
                <div class="col-md-4">
                    <p>1. Предоставляем оборудование, программное обеспечение, запуск и техническую поддержку.</p>
                    <p>2. Проводим регистрацию терминалов, личного кабинета и доавторизатора в процессинговом центре Банка.</p>
                    <p>3. Осуществляем информационно-технологическое взаимодействие и авторизацию по операциям, совершенным на терминале.</p>
                </div>
                <div class="col-md-4">
                    <p>4. Обеспечиваем рекламно-информационными материалами, необходимыми для работы с Картами.</p>
                    <p>5. Предоставляем возможность в системе для осуществления всех видов операций (оплата проезда, учет наличных, учет льготных категорий граждан) с использованием банковских карт.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="action-sec" id="contact" hidden="hidden">
        <div class="container">
            <div class="action-box">
                <h2 class="text-center">КАК С НАМИ СВЯЗАТЬСЯ:</h2>
                <div class="row justify-content-center">
                    <div class="col-4 form-block">
                        <form class="form md-form" action="#" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="md-form-line-wrap">
                                            <div class="form-group field-guestbook-name required" aria-required="true">
                                                <label class="control-label" for="guestbook-name">Имя</label>
                                                <input id="guestbook-name" class="form-control" name="Guestbook[name]" placeholder="Ваше имя" type="text">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="md-form-line-wrap">
                                            <div class="form-group field-guestbook-email required" aria-required="true">
                                                <label class="control-label" for="guestbook-email">E-mail</label>
                                                <input id="guestbook-email" class="form-control" name="Guestbook[email]" placeholder="Ваше E-mail" type="text">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <div class="md-form-line-wrap">
                                            <div class="form-group field-guestbook-text required" aria-required="true">
                                                <label class="control-label" for="guestbook-text">Сообщение</label>
                                                <textarea id="guestbook-text" class="form-control" name="Guestbook[text]" placeholder="Ваше сообщение"></textarea>

                                                <div class="help-block"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input id="agree" type="checkbox"> Даю согласие на обработку <a href="#" target="_blank">персональных данных</a><br>
                                    <div class="form-group mb-0">
                                        <button id="disbut" type="submit" class="btn btn-block btn-primary" disabled="disabled">Отправить сообщение</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer" style="background: #000 !important;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="/">Главная</a></li>
                        <li class="list-inline-item"><a href="/contact">Контакты</a></li>
                        <li class="list-inline-item"><a href="/support">Поддержка</a></li>
                        <li class="list-inline-item"><a href="/about">О компании</a></li>
                        <li class="list-inline-item"><a href="/product">Продукты</a></li>
                    </ul>
                    <p>Отслеживание маршрутов города Улан-Удэ <a href="//trans03.ru">тут</a></p>
                    <p>Электронная оплата проезда Республики Бурятии <a href="//proezd03.ru"> тут</a></p>
                    <p>Электронная оплата проезда Забайкальского края <a href="//proezd75.ru"> тут</a></p>
                    <p>Автовокзалы Улан-Удэ <a href="//avtovokzal-ulan-ude.ru"> тут</a></p>
                    <p>Автовокзалы Забайкальского края <a href="//chita-avtovokzal.ru"> тут</a></p>
                    <p>Copyright © <?= date('Y') ?> Антариз. Все права защищены.</p>
                </div>
            </div>
        </div>
    </section>

<script type="text/javascript">
    jQuery(document).ready(function(){
        $('body').on('change', '#agree', function(){
            $('#disbut').prop( "disabled", !this.checked );
        });
    });
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
