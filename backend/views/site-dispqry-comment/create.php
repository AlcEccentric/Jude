<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the create view file of site-dispqry-ccomment page of backend site.
 */ 
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryComment */

$this->title = 'Create Site Dispqry Comment';
$this->params['breadcrumbs'][] = ['label' => 'Site Dispqry Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-dispqry-comment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
