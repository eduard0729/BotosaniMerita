<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $model common\models\Proiecte */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proiecte-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nume')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idee')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'domeniu')->dropDownList([ 'Educatie' => 'Educatie', 'Infrastructura' => 'Infrastructura', 'Sport' => 'Sport', 'Administratie' => 'Administratie', 'Servicii' => 'Servicii', 'Proiecte Europene' => 'Proiecte Europene', 'Tineret' => 'Tineret', 'Finanţe' => 'Finanţe', 'Altul' => 'Altul', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'buget')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-5">{input}</div></div>',
                ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Propune!' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
