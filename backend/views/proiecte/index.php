<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProiecteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Proiecte';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proiecte-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Creează Proiecte', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function($model){
            if($model->Validat == 'Da')
            {
                return ['class'=>'success'];
            }
            else {
                return ['class'=>'danger'];
            }
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nume',
            'idee',
            'domeniu',
            'buget',
            'data',
            'Validat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
