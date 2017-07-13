<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryWritings */

$this->title = $model->wrtId;
$this->params['breadcrumbs'][] = ['label' => '文章发表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-dispqry-writings-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->wrtId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->wrtId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '您确定删除这篇文章吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'wrtId',
            //'memId',
			['label'=>'作者',
			    'value'=>$model->mem->nickname,
				],
            //'wrtDate',
			[
            'attribute'=>'发布时间',
            'value'=>date("Y-m-d H:i:s",$model->wrtDate),
            ],
            'wrtTitle:ntext',
            'wrtContent:ntext',
            //'wrtsStatusId',
			['label'=>'状态',
			       'value'=>$model->wrtsStatus->wrtStatusName,
				   ],
        ],
		'template'=>'<tr><th style="width:80px;">{label}</th><td>{value}</td></tr>',
		'options'=>['class'=>'table table-striped table-bordered detail-view'],
    ]) ?>

</div>
