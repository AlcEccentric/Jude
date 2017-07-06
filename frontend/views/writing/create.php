<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Writing */

$this->title = 'Create Writing';
$this->params['breadcrumbs'][] = ['label' => 'Writings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="writing-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
