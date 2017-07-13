<?php
/*
	Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 7 July 2017
    This is a php document to build the structure of the members site.

*/
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Members';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

	<div class="member-wrap">

		<div class="contents">
		    <h2 class="primary-title">Team Jude</h2>
		    
		    <div class="section">
			    <div class="article members">
			        <h3>组员</h3>
			        <ul>
			            <li>
			                <span class="position">组长</span> Zero
			                <a href="" >Profile</a>
			            </li>
			            <li>
			                <span class="position">组员</span>李弘毅
			                <a href="/advanced/frontend/web/index.php?r=site%2Fmem2" target="_blank">Profile</a>
			            </li>
			            <li>
			                <span class="position">组员</span>王毅文
			                <a href="/advanced/frontend/web/index.php?r=site%2Fmem1" target="_blank">Profile</a>
			            </li>
			            
			        </ul>
			        <h4>主要人员</h4>
			        <ul>
			        	<li>
			                王毅文
			                <a href="/advanced/frontend/web/index.php?r=site%2Fmem1" target="_blank">Profile</a>
			            </li>
			            <li>
			                李弘毅
			                <a href="/advanced/frontend/web/index.php?r=site%2Fmem2" target="_blank">Profile</a>
			            </li>
			            
			        </ul>
			        
			        
			   
			        
			    </div>
		   
			</div><!-- /.section -->

			
		</div>    
	</div>
</div>

