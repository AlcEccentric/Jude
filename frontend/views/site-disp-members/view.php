<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the View view file of site-disp-members page of frontend site.
 */ 
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispMembers */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Site Disp Members', 'url' => ['index']];
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
            'memAge',
            'memCol',
            'memDept',
            'email:email',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'password',
            'username',
        ],
    ]) ?>

</div>
