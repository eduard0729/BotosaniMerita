<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Proiecte */

$this->title = 'Create Proiecte';
$this->params['breadcrumbs'][] = ['label' => 'Proiectes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proiecte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
