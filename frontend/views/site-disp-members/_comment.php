<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php foreach($comments as $comment): ?>

<div class="comment">

	<div >
		<div >
			<div >
			<p >
			
			 <br>
			 <?= nl2br($comment->comContent);?>
			 <br>
			 <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
			 <em><?= date('Y-m-d H:i:s',$comment->comTime);?>;</em>
			 <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			 <em><?= Html::encode($comment->user->username);?>;</em>
			 </p>			 
		</div>
	</div>
</div>
</div>

<?php endforeach;?>