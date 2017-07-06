<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Writing */

$this->title = 'Update Writing: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Writings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->wid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="writing-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
