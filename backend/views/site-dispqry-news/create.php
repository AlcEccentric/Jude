<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170711
 * This is the create view file of site-disp-news page of backend site.
 */ 

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryNews */

$this->title = '写新闻';
$this->params['breadcrumbs'][] = ['label' => '新闻管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-dispqry-news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
