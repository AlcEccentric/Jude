<?php

use yii\helpers\Html;

use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\SiteDispMembers */

$this->title = '成员管理';
$this->params['breadcrumbs'][] = ['label' => '重置密码', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-disp-members-create">

    <h1><?= Html::encode($this->title) ?></h1>

   <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_repeat')->passwordInput(['maxlength' => true]) ?>


	<div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    

   
</div>
