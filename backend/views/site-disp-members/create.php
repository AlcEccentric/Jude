<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170710
 * This is the create view file of site-disp-members page of backend site.
 */   
use yii\helpers\Html;

use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\SiteDispMembers */

$this->title = '组内成员管理';
$this->params['breadcrumbs'][] = ['label' => '组内成员管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-disp-members-create">

    <h1><?= Html::encode($this->title) ?></h1>

   <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_repeat')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'memAge')->textInput() ?>

    <?= $form->field($model, 'memCol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'memDept')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

	<div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    

   
</div>
