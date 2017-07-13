<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170711
 * This is the View view file of site-disp-news page of backend site.
 */ 




/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 9 July 2017
    This is a php document to render the view part of the backend news site.

*/
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryNews */

$this->title = $model->newsTitle;
$this->params['breadcrumbs'][] = ['label' => '新闻管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-dispqry-news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改新闻', ['update', 'id' => $model->newsId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除新闻', ['delete', 'id' => $model->newsId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除该新闻吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'newsId',
            'newsTitle:ntext',
            'newsContent:ntext',
            ['label'=>'新闻发布状态',

            'value'=>$model->newsStatus->newsStatusName],
            [
            'attribute'=>'newsDate',
            'value'=>date("Y-m-d H:i:s",$model->newsDate),
            ],
            
            ['attribute'=>'memId',

            'value'=>$model->mem->nickname],


        ],
        
        'template'=>'<tr><th style="width:120px;">{label}</th><td>{value}</td></tr>',
        'options'=>['class'=>'table table-striped table-bordered detail-view'],
    ]) ?>

</div>
