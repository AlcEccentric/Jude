<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170710
 * This is the View view file of site-disp-members page of backend site.
 */ 
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispMembers */

$this->title = $model->id.':'.$model->nickname;
$this->params['breadcrumbs'][] = ['label' => '组内成员管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-disp-members-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nickname',
            'username',
            'memAge',
            'memCol',
            'memDept',
            'email:email',
            
        ],
    ]) ?>

</div>
