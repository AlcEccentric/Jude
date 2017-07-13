<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the index view file of site-dispqry-writings page of backend site.
 */ 
use yii\helpers\Html;
use yii\grid\GridView;
use common\models\SiteQryWritingstatus;
/* @var $this yii\web\View */
/* @var $searchModel common\models\SiteDispqryWritingsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-dispqry-writings-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('发表新的文章', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            

            ['attribute'=>'wrtId',
            'contentOptions'=>['width'=>'30px'],],
            //'memId',
			['attribute'=>'authorName',
			'label'=>'作者',
            'value'=>'mem.nickname',
			'contentOptions'=>['width'=>'50px'],],
            //'wrtDate',
			['attribute'=>'wrtDate',
             'format'=>['date','php:Y-m-d H:i:s'],
			 
            ],
            'wrtTitle:ntext',
            //'wrtContent:ntext',
             //'wrtsStatusId',
	        ['attribute'=>'wrtsStatusId',
              'value'=>'wrtsStatus.wrtStatusName',
             
        ],						
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
