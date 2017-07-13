<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170711
 * This is the index view file of user page of backend site.
 */ 



/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 9 July 2017
    This is a php document to render the index page of the backend user site.

*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '用户管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            //'auth_key',
          //  'password_hash',
           // 'password_reset_token',
            'email:email',
            //'status',
            [
                    'attribute'=>'status',
                    'value'=>'statusStr',
            ],
            [
                    'attribute'=>'created_at',
                    'format'=>['date','php:Y-m-d H:i:s'],
            ],
            // 'updated_at',
                [
                'attribute'=>'updated_at',
                'format'=>['date','php:Y-m-d H:i:s'],
                ],

            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn',
            'template'=>'{update}'
            ],
        ],
    ]); ?>
</div>
