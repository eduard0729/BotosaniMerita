<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mesaje */

$this->title = 'Update Mesaje: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mesajes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mesaje-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
