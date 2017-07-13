<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryComment */

$this->title = $model->comId;
$this->params['breadcrumbs'][] = ['label' => '评论管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-dispqry-comment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->comId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->comId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '您确定删除这条评论吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'comId',
            'comContent:ntext',
            //'comStatusId',
			['label'=>'状态',
			       'value'=>$model->comStatus->comStatusName,
				   ],
            ['attribute'=>'authorname',
			'label'=>'评论对象',
            'value'=>$model->mem->nickname,],
            'userId',
            //'comTime:datetime',
			[
            'attribute'=>'评论时间',
            'value'=>date("Y-m-d H:i:s",$model->comTime),
            ],
        ],
    ]) ?>

</div>
