<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the index view file of site-dispqry-ccomment page of backend site.
 */ 
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SiteDispqryCommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '评论管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-dispqry-comment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'comId',
			['attribute'=>'comId',
            'contentOptions'=>['width'=>'30px'],],
            //'comContent:ntext',
            ['attribute'=>'comContent',
			'value'=>'beginning',
			],
			//'comStatusId',
			['attribute'=>'ttStatus',
			 'label'=>'状态',
              'value'=>'comStatus.comStatusName',
             'contentOptions'=>
			            function($model)
						{
							return ($model->comStatusId==1)?['class'=>'bg-danger']:[];
						}
        ],		
            //'memId',
			['attribute'=>'authorName',
			'label'=>'评论对象',
            'value'=>'mem.nickname',
			'contentOptions'=>['width'=>'100px'],],
            //'userId',
			['attribute'=>'userId',
			'label'=>'评论者',
            'value'=>'user.username',
			'contentOptions'=>['width'=>'100px'],],
            // 'comTime:datetime',
			['attribute'=>'comTime',
			'label'=>'评论时间',
             'format'=>['date','php:Y-m-d H:i:s'],
			 
            ],

            ['class' => 'yii\grid\ActionColumn',
			'template'=>'{view}{update}{delete}{approve}',
			'buttons'=>[
			          'approve'=>function($url,$model,$key)
					  {
						  $options=[
						  'title'=>Yii::t('yii','审核'),
						  'aria-label'=>Yii::t('yii','审核'),
						  'data-confirm'=>Yii::t('yii','你确定通过这条评论吗?'),
						  'data-method'=>'post',
						  'data-pjax'=>'0',
						  ];
						  return Html::a('<span class="glyphicon glyphicon-check"></span>',$url,$options);
					  },
					  ], 
					  ],
        ],
    ]); ?>
</div>
