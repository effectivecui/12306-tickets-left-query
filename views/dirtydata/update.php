<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dirtydata */

$this->title = 'Update Dirtydata: ' . ' ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Dirtydatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dirtydata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
