<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Оператор Транспортных Сервисов: Контакты';
?>
<div class="site-contact">
    <h1>Контакты</h1>
    <div>
        <div>
            <div>
                <p><span class="fa fa-building "></span> ООО «Антариз»</p>
                <p><span class="fa fa-file"></span> ОГРН 1130327002960  ИНН/КПП   0326511681 / 032601001</p>
            </div>
            <div>
                <p><span class="fa fa-map-marker"></span> Республика Бурятия, г. Улан-Удэ, ул. Буйко 20а</p>
            </div>
            <div>
                <p><span class="fa fa-phone"></span>  Контактный телефон: 8(800)200-44-01</p>
            </div>
        </div> 
    </div>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Благодарим Вас за обращение к нам. Мы ответим Вам как можно скорее.
        </div>

    <?php else: ?>

        <p>
            Обратиться к нам Вы можете, заполнив форму внизу.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->input('email') ?>

                    <?= $form->field($model, 'email')->hiddenInput(['value' => 'info@biletavto.ru'])->label(false); ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Отправка', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
