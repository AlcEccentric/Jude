<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170711
 * This is the project view file of site-disp-members page of frontend site.
 */ 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php foreach($projects as $project): ?>

<tr>
	<td>
		<img src="projects_pic/abstract-thumb-128x128-225.jpg" height="100" align="right">
	</td>



	<td>
								
		<h2><b><?=$project->proName;?></b></h2>
		<span>Complete Time:</span> <span><?= date('Y-m-d H:i:s',$project->proDate);?></span>
		<br>
		<?= nl2br($project->proIntro);?>
		<br>			
	</td>
</tr>


<?php endforeach;?>