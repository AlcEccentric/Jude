<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the create view file of site-dispqry-writings page of backend site.
 */ 
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryWritings */

$this->title = '新增文章';
$this->params['breadcrumbs'][] = ['label' => '文章管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-dispqry-writings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
