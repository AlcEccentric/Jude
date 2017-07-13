<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the View view file of site-dispqry-projects page of frontend site.
 */ 
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryProjects */

$this->title = $model->proId;
$this->params['breadcrumbs'][] = ['label' => 'Site Dispqry Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-dispqry-projects-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->proId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->proId], [
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
            'proId',
            'proName',
            'proDate',
            'proIntro:ntext',
            'proPosUrl',
            'proStatusId',
            'memId',
        ],
    ]) ?>

</div>
