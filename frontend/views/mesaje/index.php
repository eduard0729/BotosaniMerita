<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MesajeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mesaje';

?>
<div class="mesaje-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

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
            'nume',
            'mesaj:ntext',
            'data',
            // 'Validat',
            ['class' => 'yii\grid\ActionColumn','template'=>'{view}' ]
        ],
    ]); ?>

</div>
