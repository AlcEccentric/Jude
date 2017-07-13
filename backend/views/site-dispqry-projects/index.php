<?php
/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 9 July 2017
    This is a php document to render the index page of the backend projects site.

*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SiteDispqryProjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '项目管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-dispqry-projects-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加项目', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'proId',
            'proName',
            ['attribute'=>'proDate',
             'format'=>['date','php:Y-m-d H:i:s'],
            ],
            //'proIntro:ntext',
			['attribute'=>'proIntro',
			'value'=>'beginning',
			],
            'proPosUrl',
            ['attribute'=>'proStatusId',
            'value'=>'proStatus.proStatusName'],
            ['attribute'=>'memName',
            'label'=>'完成者',
            'value'=>'mem.nickname'],

            ['class' => 'yii\grid\ActionColumn'],
        ],
        
    ]); ?>
</div>
