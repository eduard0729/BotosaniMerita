<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Mesaje */

$this->title = "Mesaj nr.: " . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mesaje', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="mesaje-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nume',
            'mesaj:ntext',
            'data',
            'Validat',
        ],
    ]) ?>

</div>
