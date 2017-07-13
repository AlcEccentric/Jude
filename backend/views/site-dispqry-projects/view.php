<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170711
 * This is the View view file of site-disp-projects page of backend site.
 */ 

/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 9 July 2017
    This is a php document to render the view part of the backend projects site.

*/
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryProjects */

$this->title = $model->proId.':'.$model->proName;
$this->params['breadcrumbs'][] = ['label' => '项目管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-dispqry-projects-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改信息', ['update', 'id' => $model->proId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除项目', ['delete', 'id' => $model->proId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除项目吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'proId',
            'proName',
            ['attribute'=>'proDate',
             'format'=>['date','php:Y-m-d H:i:s'],
            ],
            'proIntro:ntext',
            'proPosUrl',
            ['label'=>'项目发布状态',
            'value'=>$model->proStatus->proStatusName],
            ['label'=>'项目完成者',
            'value'=>$model->mem->nickname],
        ],
    ]) ?>

</div>
