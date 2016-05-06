<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Proiecte */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proiecte-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nume')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'domeniu')->dropDownList([ 'Educatie' => 'Educatie', 'Infrastructura' => 'Infrastructura', 'Sport' => 'Sport', 'Administratie' => 'Administratie', 'Servicii' => 'Servicii', 'Proiecte Europene' => 'Proiecte Europene', 'Altele' => 'Altele', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'buget')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
