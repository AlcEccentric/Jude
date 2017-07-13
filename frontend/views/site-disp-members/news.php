<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170711
 * This is the news view file of site-disp-members page of frontend site.
 */ 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php foreach($news as $new): ?>

						<li>
							<span><?= date('Y-m-d H:i:s',$new->newsDate);?></span>
							
							<a href="<?= $new->url;?>" target="_blank"><?=$new->newsTitle;?></a>
							 
						</li>
							

<?php endforeach;?>

