<?php
/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 10 July 2017
    This is a php document to render layout of the backend member site.

*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SiteDispMembersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '组内成员管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-disp-members-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新增成员', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            

            'id',
            'nickname',
            'memAge',
            'memCol',
            'memDept',
            // 'email:email',
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            // 'password',
            // 'username',

            ['class' => 'yii\grid\ActionColumn',
                    'template'=>'{view} {update} {resetpwd} {privilege}',
                    'buttons'=>[
                            'resetpwd'=>function($url,$model,$key)
                            {
                                $options=[
                                        'title'=>Yii::t('yii','重置密码'),
                                        'aria-label'=>Yii::t('yii','重置密码'),
                                        'data-pjax'=>'0',
                                        ];
                                return Html::a('<span class="glyphicon glyphicon-lock"></span>',$url,$options);
                            },
                            
                            ],],
        ],
    ]); ?>
</div>
