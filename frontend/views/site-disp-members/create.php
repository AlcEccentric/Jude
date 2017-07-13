<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the create view file of site-disp-members page of frontend site.
 */ 
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SiteDispMembers */

$this->title = 'Create Site Disp Members';
$this->params['breadcrumbs'][] = ['label' => 'Site Disp Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-disp-members-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
