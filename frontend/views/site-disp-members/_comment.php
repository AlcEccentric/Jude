<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the comment view file of site-disp-members page of frontend site.
 */  
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php foreach($comments as $comment): ?>

<div class="comment" >

	<div >
		<div >
			<div >
			<p style = "color:#6699cc;font-size: 18px;font-weight: bold;">
			
			 <br>
			 <?= nl2br($comment->comContent);?>
			 <br>
			 <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
			 <em><?= date('Y-m-d H:i:s',$comment->comTime)?>&nbsp&nbsp&nbsp</em>
			 <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			 <em><?= Html::encode($comment->user->username)?></em>
			 </p>			 
		</div>
	</div>
</div>
</div>

<?php endforeach;?>