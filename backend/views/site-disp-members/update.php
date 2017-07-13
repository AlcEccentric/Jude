<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170710
 * This is the update view file of site-disp-members page of backend site.
 */ 
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispMembers */

$this->title = '更新成员信息: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '成员管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="site-disp-members-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
