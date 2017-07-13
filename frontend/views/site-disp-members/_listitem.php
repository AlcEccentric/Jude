<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170711
 * This is the listitem view file of site-disp-members page of frontend site.
 */ 

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 11 July 2017
    用于显示年份的子模块，父亲模块是news的views下的index.php.

*/
?>
<h2  class="yearly"><a style="color:yellow " width="30px" href="<?= $model->url;?>"><?= Html::encode($model->nickname);?></a></h2>
<div class="participants">
  <table border="0">	
	<tbody>
	<tr>	
	  <td width="175"><img src="my.jpeg" width="150" style="border-radius: 10px;"></td>
	  <td>
		<p> 学号:<?=Html::encode($model->id);?></p>
		<p> 学院:<?=Html::encode($model->memCol);?></p>
		<p> 系别:<?=Html::encode($model->memDept);?></p>
		
		</td>
	</tr>	
	</tbody>
  </table>
</div>

<br>


