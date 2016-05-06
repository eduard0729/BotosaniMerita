<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Proiecte */

$this->title = 'Update Proiecte: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Proiectes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="proiecte-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('upd', [
        'model' => $model,
    ]) ?>

</div>
