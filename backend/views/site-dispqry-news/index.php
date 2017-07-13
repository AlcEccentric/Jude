<?php
/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 9 July 2017
    This is a php document to render the index page of the backend news site.

*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SiteDispqryNewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '新闻管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-dispqry-news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('写新闻', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            

            'newsId',
            'newsTitle:ntext',
            
            ['attribute'=>'newsStatusId',
            'value'=>'newsStatus.newsStatusName'],
            
            ['attribute'=>'newsDate',
             'format'=>['date','php:Y-m-d H:i:s'],
            ],
            
            ['attribute'=>'memName',
            'label'=>'发布人',
            'value'=>'mem.nickname'],
            // 'newsContent:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
