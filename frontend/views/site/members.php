<?php
/*
	Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 6 July 2017
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
			                <span class="position">组长</span>王毅文
			                <a href="http://www-ui.is.s.u-tokyo.ac.jp/~takeo/index-j.html">Profile</a>
			            </li>
			            <li>
			                <span class="position">组员</span>李弘毅
			                <a href="http://www.xiehr.com/">Profile</a>
			            </li>
			            
			        </ul>
			        <h4>主要人员</h4>
			        <ul>
			            <li>
			                李弘毅
			                <a href="http://adonischang.com/index.html">Profile</a>
			            </li>
			            <li>
			                王毅文
			                <a href="http://adonischang.com/index.html">Profile</a>
			            </li>
			        </ul>
			        
			        
			   
			        
			    </div>
		   
			</div><!-- /.section -->

			
		</div>    
	</div>

    
</div>
