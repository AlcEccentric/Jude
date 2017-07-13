<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the form view file of site-dispqry-writings page of backend site.
 */ 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\SiteQryWritingstatus;
use yii\helpers\ArrayHelper;
use common\models\SiteDispMembers;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryWritings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-dispqry-writings-form">

    <?php $form = ActiveForm::begin(); ?>

  
    <?= $form->field($model,'memId')
         ->dropDownList(SiteDispMembers::find()
                        ->select(['nickname','id'])
                        ->orderBy('id')
                        ->indexBy('id')
                        ->column(),
               ['prompt'=>'请选择作者']);?>
  

    <?= $form->field($model, 'wrtTitle')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'wrtContent')->textarea(['rows' => 6]) ?>

   
    <?php $wrtSta=SiteQryWritingstatus::find()->all();
	$allStatus = ArrayHelper::map($wrtSta,'wrtStatusId','wrtStatusName');
	?>
	<?= $form->field($model, 'wrtsStatusId')->dropDownList($allStatus,
	['prompt'=>'请选择状态']);	
	?>
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新增' : '保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
