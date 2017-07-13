<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the update view file of site-dispqry-writings page of backend site.
 */ 
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryWritings */

$this->title = '更新文章信息: ' . $model->wrtId;
$this->params['breadcrumbs'][] = ['label' => '文章管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->wrtId, 'url' => ['view', 'id' => $model->wrtId]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="site-dispqry-writings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
