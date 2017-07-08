<?php
/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 6 July 2017
    This is a modified php document to build up the structure of the news site.
*/
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    

    <div class="newscontents">
        <h2 id="new" class="primary-title">新闻</h2>

        <div id="navi-yearly" style="top: 164px;">
        <h5>Archive</h5>
        <ul>
            <li><a href="#new">New</a></li>
            <li><a href="#2017">2017</a></li>
            <li><a href="#2016">2016</a></li>
        </ul>
    </div><!-- /#navi-yearly -->

    
    <div id="2017" class="section">
        <h2  class="yearly"><span>2017</span><a href="#new" class="top">&nbsp&nbsp&nbspTOP</a></h2>
        
        
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
        </a>

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

    </div><!-- /.section -->
    
</div>
