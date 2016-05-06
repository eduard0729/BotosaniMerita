<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Dacă te putem ajuta cu ceva, nu eziza să ne contactezi! 
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->label('Nume şi prenume')   ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject')->label('Subiect')   ?>

                <?= $form->field($model, 'body')->textArea(['rows' => 6])->label('Mesajul tău!')  ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-5">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Trimite!', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
