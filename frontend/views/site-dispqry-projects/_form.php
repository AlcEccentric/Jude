<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryProjects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-dispqry-projects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'proName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proDate')->textInput() ?>

    <?= $form->field($model, 'proIntro')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'proPosUrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proStatusId')->textInput() ?>

    <?= $form->field($model, 'memId')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
