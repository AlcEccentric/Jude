<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\SiteDispMembers;
use common\models\SiteQryComstatus;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryComment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-dispqry-comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'comContent')->textarea(['rows' => 6]) ?>

     <?php $wrtSta=SiteQryComstatus::find()->all();
	$allStatus = ArrayHelper::map($wrtSta,'comStatusId','comStatusName');
	?>
	<?= $form->field($model, 'comStatusId')->dropDownList($allStatus,
	['prompt'=>'请选择状态']);	
	?>

    <?= $form->field($model,'memId')
         ->dropDownList(SiteDispMembers::find()
                        ->select(['nickname','id'])
                        ->orderBy('id')
                        ->indexBy('id')
                        ->column(),
               ['prompt'=>'请选择评论对象']);?>

  

   

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
