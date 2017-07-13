<?php
/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 9 July 2017
    This is a php document to render update page of the backend projects site.

*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryProjects */

$this->title = '修改项目信息: ' . $model->proId.':'.$model->proName;
$this->params['breadcrumbs'][] = ['label' => '项目管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->proId.':'.$model->proName, 'url' => ['view', 'id' => $model->proId]];
$this->params['breadcrumbs'][] = '修改信息';
?>
<div class="site-dispqry-projects-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
