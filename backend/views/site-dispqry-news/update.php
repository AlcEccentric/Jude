<?php
/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 9 July 2017
    This is a php document to render the update page of the backend news site.

*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryNews */

$this->title = '修改新闻:' . $model->newsTitle;
$this->params['breadcrumbs'][] = ['label' => '新闻管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->newsTitle, 'url' => ['view', 'id' => $model->newsId]];
$this->params['breadcrumbs'][] = '修改新闻';
?>
<div class="site-dispqry-news-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
