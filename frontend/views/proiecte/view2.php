<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Proiecte */

$this->title = "Proiect nr.: " . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Proiecte', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proiecte-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nume',
            'idee',
            'domeniu',
            'buget',
            'data',
            'Validat',
        ],
    ]) ?>

</div>
