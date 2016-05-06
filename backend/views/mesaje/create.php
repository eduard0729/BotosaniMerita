<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Mesaje */

$this->title = 'Create Mesaje';
$this->params['breadcrumbs'][] = ['label' => 'Mesajes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mesaje-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
