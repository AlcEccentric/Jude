<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the writing view file of site-disp-members page of frontend site.
 */ 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php foreach($writings as $writing): ?>

						<li>
							<span><?= date('Y-m-d ',$writing->wrtDate);?></span>
							
							<a href=" <?= $writing->url;?>" target="_blank"><?=$writing->wrtTitle;?></a>
							 
						</li>

<?php endforeach;?>

