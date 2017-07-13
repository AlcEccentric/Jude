<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php foreach($news as $new): ?>

<div class="new">

	<div class="row">
		<div >
			<div>
			<p >
			
			 <br>
			
			 <h6><?=$new->newsTitle;?></h6>
			 <?= nl2br($new->newsContent);?> 			
			 <br>
			 <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
			 <em><?= date('Y-m-d H:i:s',$new->newsDate);?>;</em>
			 </p>			 
		</div>
	</div>
</div>
</div>

<?php endforeach;?>