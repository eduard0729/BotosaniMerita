<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MesajeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mesaje-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nume') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'mesaj') ?>

    <?= $form->field($model, 'data') ?>

    <?php // echo $form->field($model, 'Validat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
