<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 11 July 2017
    用于显示年份的子模块，父亲模块是news的views下的index.php.

*/
?>
<h2  class="yearly"><a style="color:yellow " href="<?= $model->url;?>"><?= Html::encode($model->newsTitle);?></a></h2>
<div class="participants">
		
		<span class="glyphicon glyphicon-time" aria-hidden="true"></span><em><?= date('Y-m-d H:i:s',$model->newsDate)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";?></em>
		<span class="glyphicon glyphicon-user" aria-hidden="true"></span><em><?= Html::encode($model->mem->nickname);?></em>
</div>

<br>
<div class="article">
	<?= $model->beginning;?>	
</div>
