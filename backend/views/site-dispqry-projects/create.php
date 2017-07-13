<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170711
 * This is the create view file of site-disp-projects page of backend site.
 */ 

/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 9 July 2017
    This is a php document to render the create page of the backend projects site.

*/
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryProjects */

$this->title = '添加项目';
$this->params['breadcrumbs'][] = ['label' => '项目管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-dispqry-projects-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
