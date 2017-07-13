<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the update view file of site-dispqry-ccomment page of backend site.
 */ 

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryComment */

$this->title = '更新评论信息: ' . $model->comId;
$this->params['breadcrumbs'][] = ['label' => '评论管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->comId, 'url' => ['view', 'id' => $model->comId]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="site-dispqry-comment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
