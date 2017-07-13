<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php foreach($projects as $project): ?>

<div class="project">

	<div class=>
		<div >
			<div>
			<p >
			
			 <br>
						 <h6><?=$project->proName;?></h6>
			 
			 <?= nl2br($project->proIntro);?>
			 <br>
			 <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
			 <em><?= date('Y-m-d H:i:s',$project->proDate);?>;</em>
			 <br>
			 </p>			 
		</div>
	</div>
</div>
</div>

<?php endforeach;?>