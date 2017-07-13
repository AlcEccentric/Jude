<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170710
 * This is the index view file of site-dispqry-news page of frontend site.
 */ 
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;


/* @var $this yii\web\View */
/* @var $searchModel common\models\SiteDispqryNewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    

    <div class="newscontents">
        <h2 id="new" class="primary-title">新闻</h2>


    
    <div id="2017" class="section">


       <!--  <h2  class="yearly"><span>2017</span><a href="#new" class="top">&nbsp&nbsp&nbspTOP</a></h2>
        
        
        <a href="" target="_blank">
        <div class="article">
           <p class="image">                
                    <img src="projects_pic/abstract-thumb-128x128-225.jpg" alt="project image">                
            </p>
            
                <h3>探索的プログラミングのための小規模バージョン管理ツール</h3>
                <div class="text">Project Intro:  <span class="intro">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</span></div>
                <div class="year"><span>xxxx</span>年<span>xx</span>月<span>xx</span>日</div>
                 <div class="participants">相关人员:  <span>xxxx</span> <span>xxxx</span> </div>
                <div class="related">相关项目:  <span>xxxx</span> <span>xxxx</span> </div>
        </div>
        </a>


        <h2 id="2016" class="yearly"><span>2016</span><a href="#new" class="top">&nbsp&nbsp&nbspTOP</a></h2>
        
        <a href="" target="_blank">
        <div class="article">
           <p class="image">                
                    <img src="projects_pic/abstract-thumb-128x128-225.jpg" alt="project image">                
            </p>
            
                <h3>探索的プログラミングのための小規模バージョン管理ツール</h3>
                <div class="text">Project Intro:  <span class="intro">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</span></div>
                <div class="year"><span>xxxx</span>年<span>xx</span>月<span>xx</span>日</div>
                 <div class="participants">相关人员:  <span>xxxx</span> <span>xxxx</span> </div>
                <div class="related">相关项目:  <span>xxxx</span> <span>xxxx</span> </div>
        </div>
        </a> -->
        <?= ListView::widget([
				'id'=>'postList',
				'dataProvider'=>$dataProvider,
				'itemView'=>'_listitem',//子视图,显示一篇文章的标题等内容.
				'layout'=>'{items} {pager}',
				'pager'=>[
						'maxButtonCount'=>1,
						'nextPageLabel'=>Yii::t('app','下一页'),
						'prevPageLabel'=>Yii::t('app','上一页'),
		],
		])?>



  

    </div><!-- /.section -->

    </div>
    
</div>
