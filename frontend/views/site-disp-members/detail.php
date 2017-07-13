<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use frontend\components\TagsCloudWidget;
use frontend\components\RctReplyWidget;

use yii\helpers\HtmlPurifier;
use common\models\SiteDispqryComment;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title=$model->nickname;
$this->params['breadcrumbs'][] = $this->title; 
?>

<div class="container">

	<div class="row">		
		<h3>个人信息</h3>
		<table border="0">
				<tbody>
					<tr>
						<td width="175"><img src="img/my.jpg" width="150" style="border-radius: 10px;"> 
						</td>						
						<td> 
							<br>	
					    	<p>学号:<?= $model->id ?></p> 
					    	<p>学院:<?=  $model->memCol ?></p> 				
							<p>系别:<?=  $model->memDept ?></p>
							<h2>							
							</h2>						
						</td>
					</tr>
				</tbody>
			</table>				
		<div >
		
		<h3>项目</h3>
		<?= $this->render('_project',array(
					'post'=>$model,
					'projects'=>$model->siteDispqryProjects,
			));?>
		
		<h3>新闻</h3>
		<?= $this->render('news',array(
					'post'=>$model,
					'news'=>$model->siteDispqryNews,
			));?>
		
			<?php if($added) {?>
			<br>
			<div >
			  
			  
			  <h4>谢谢您的评价，我们会尽快审核为您发表</h4>
			  
			  <p><?= ($commentModel->comContent);?></p>
			    	<span class="glyphicon glyphicon-time" aria-hidden="true"></span><em><?= date('Y-m-d H:i:s',$commentModel->comTime)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";?></em>
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span><em><?= Html::encode($model->nickname);?></em>	  
				
			</div>			
			<?php }?>		
			<?php if($model->commentCount>=1) :?>
			<br>
			<h3><?= $model->commentCount.'条评论';?></h3>
			<?= $this->render('_comment',array(
					'post'=>$model,
					'comments'=>$model->activeComments,
			));?>
			<?php endif;?>
			
			<h5>发表评价</h5>
			<?php 
			$commentModel =new SiteDispqryComment();
			echo $this->render('_guestform',array(
					'id'=>$model->id,
					'commentModel'=>$commentModel, 
			));?>
			
			</div>
					
	</div>
</div>
		
	
		
	
			
		

		


