<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryProjects */

$this->title = 'Update Site Dispqry Projects: ' . $model->proId;
$this->params['breadcrumbs'][] = ['label' => 'Site Dispqry Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->proId, 'url' => ['view', 'id' => $model->proId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="site-dispqry-projects-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
