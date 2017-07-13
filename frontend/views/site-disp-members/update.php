<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the pupdate view file of site-disp-members page of frontend site.
 */ 
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispMembers */

$this->title = 'Update Site Disp Members: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Site Disp Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="site-disp-members-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
