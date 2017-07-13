<?php
/**
 * Team: Jude
 * Coding By: wangyiwen 1511382, 20170711
 * This is the detail view file of site-disp-members page of frontend site.
 */ 
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

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
		<div class="mem">
			    <div id="main">
				
					<h3>个人信息</h3> 
					<table border="0">
						<tbody style="opacity: 0.99;" >
							<tr>
							  		<td width="175"><img  src="my.jpeg" width="150" style="border-radius: 10px;"> 
									</td>						
									<td> 
										<span>学号: </span><span><?=$model->id?></span> 
							    		<br>
										<span>年龄: </span><span><?=$model->memAge?></span> 
										<br>	
					    				<span>学院:</span> <span><?=$model->memCol ?></span> 
										<br>
										<span>系别:</span> <span><?=$model->memDept ?></span> 
										<br>	
					    				<span>邮箱:</span> <span><?=$model->email?></span> 
										<br>	
																
									</td>
								
								
								
							</tr>
						</tbody>
					</table>

					



					<h3><a href="/advanced/frontend/web/index.php?r=site-dispqry-news%2Findex">NEWS</a></h3>
					<p>
					<ul style="font-size:10pt;">
					<?php if($model->newsCount>=1) :?>
					<?= $this->render('news',array(
					'post'=>$model,
					'news'=>$model->siteDispqryNews,
					));?>
					<?php endif;?>	
					<?php if($model->newsCount<1) :?>
					<h4>该成员未曾发布新闻</h4>
					<?php endif;?>	
					</ul>
					</p>


					

					<h3><a href="/advanced/frontend/web/index.php?r=site-dispqry-projects%2Findex">PROJECTS</a></h3>
					<table border="0">
					
					<tbody>

					<?= $this->render('_project',array(
								'post'=>$model,
								'projects'=>$model->siteDispqryProjects,
					));?>
					<?php if($model->proCount<1) :?>
					<h4>该成员未曾完成项目</h4>
					<?php endif;?>	

					</tbody>
					</table>

					<h3><a href="">WRITINGS</a></h3>
					<ul style="font-size:10pt">
					<?= $this->render('_writing',array(
					'post'=>$model,
					'writings'=>$model->siteDispqryWritings,
					));?>
					<?php if($model->wrtsCount<1) :?>
					<h4>该成员未曾发布文章</h4>
					<?php endif;?>
					</ul>

					

					<h3><a href="">COMMENTS</a></h3>
					<ul style="font-size:10pt">
					<?php if($added) {?>
					<br>
					<div>

			  
			  
			  		<h4>谢谢您的评价，我们会尽快审核为您发表</h4>
			  
			  		<p><?= ($commentModel->comContent);?></p>
			    	<span class="glyphicon glyphicon-time" aria-hidden="true"></span><em><?= date('Y-m-d H:i:s',$commentModel->comTime)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";?></em>
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span><em><?= Html::encode($model->nickname);?></em>	  
				
					</div>			
					<?php }?>

					<?php if($model->commentCount>=1) :?>
					<br>
					<h4><?= '有'.$model->commentCount.'条评价';?></h4>
					<?= $this->render('_comment',array(
					'post'=>$model,
					'comments'=>$model->activeComments,
					));?>
					<?php endif;?>
					</ul>
					
					<?php if($model->commentCount<1) :?>
					<div>暂时没有评价~</div>
					<?php endif;?>	
					</ul>

					<h4 style="margin-top: 40px">发表评价:</h4>
					<?php
					$commentModel =new SiteDispqryComment();
					echo $this->render('_guestform',array(
					'id'=>$model->id,
					'commentModel'=>$commentModel, 
					));?>


				</div>

			</div>   
			
</div>	


		
	
		
	
			
		

		


