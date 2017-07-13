<?php

/*
    Team: JUDE
    Last Modified By: Li Hongyi, 1511373, 1 July 2017
    This is a modified php document to set elements' styles in the index site.
*/

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>


<div class="site-index" style="text-align: center;">

    
</div>

<div class = "mycontainer">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

	<div class="carousel-inner">
	  
      <div class="item active">
        <img src="projects_pic/1.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="projects_pic/2.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="projects_pic/3.png" alt="New york" style="width:100%;">
      </div>
		
	</div>

	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
		
	</div>

</div>

<div class="wrapper" style="color:  #9d9d9d;">
    <div class="body-content">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Projects</h2>

                    <div class="project">
                      <a class="proa" href="https://hiroakimikami.github.io/micro-versioning-tool/index-ja.html">
                        <h2 class="des">
                            <div>探索的プログラミングのための小規模バージョン管理ツール</div>
                        </h2>
                        <img class="proimg" style="margin-right: 20px" src="projects_pic/abstract-thumb-128x128-225.jpg" alt="project image">
                        <span>探索的プログラミングのための小規模バージョン管理ツール</span>
                      </a>
                      
                    </div>

                    <div class="project">
                      <a class="proa" href="http://www.geocities.jp/kazuyo_kojima_mizuno/projects/assistag/index-j.html">
                          <h2 class="des">
                              <div>AssisTag</div>
                          </h2>
                          <img class="proimg" src="projects_pic/overview-thumb-128x128-223.png" style="margin-right: 20px" alt="project image">
                          <span>AssisTag</span>
                      </a>

                      
                  
                    </div>

                    <div class="project">
                      <a class="proa" href="http://www-ui.is.s.u-tokyo.ac.jp/~takeo/research/aneurythm/index-j.html">
                        <h2 class="des">
                          <div>Interactive Volume Segmentation with Threshold Field Painting</div>
                        </h2>
                        <img class="proimg" style="margin-right: 20px" src="projects_pic/IVSTFP-thumb-128x128-219.png" alt="project image">
                        <span>Interactive Volume Segmentation with Threshold Field Painting</span>
                      </a>
                    
                    </div>

                    <a class="btn btn-default" href="/advanced/frontend/web/index.php?r=site%2Fprojects">More &raquo;</a>
                    
                    

                       
                                
                    

                    
                </div>
                <div class="col-lg-12">
                    <h2>News</h2>

                    <p><a class="news" style="color: white;"  href="http://news.nankai.edu.cn/nkyw/system/2017/06/29/000336576.shtml">药物化学生物学国家重点实验室通过科技部评估 &raquo;
                    <span style="float: right;">2017-06-29</span>
                    </a>
                    </p>

                    <p>
                    <a class="news" style="color: white" href="http://www.nankai.edu.cn/2017/0628/c157a69819/page.htm">关于推广试用实验室安全自查系统的通知 &raquo;
                    <span style="float: right;">2017-06-28</span>
                    </a>
                    </p>

                    <p><a class="news" style="color: white"  href="http://www.nankai.edu.cn/2017/0626/c157a69520/page.htm">关于日本语能力测试二主楼封楼通知 &raquo;
                    <span style="float: right;">2017-06-26</span>
                    </a>
                    </p>

                    

                   <a class="btn btn-default" href="/advanced/frontend/web/index.php?r=site%2Fnews">More &raquo;</a>
                </div>
                
            </div>
    </div>
    
</div>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Team <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>


