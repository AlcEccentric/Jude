<?php

/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170708
 * This is the index view file of site index page of frontend site.
 */  

/* @var $this yii\web\View 
 <?= GridView::widget([
       'dataProvider' => $dataProvider,
       'filterModel' => $searchModel,
       'columns' => [
           ['class' => 'yii\grid\SerialColumn'],
           'newsId',
           'newsTitle:ntext',
           'newsContent:ntext',
           'newsStatusId',
           'memId',
           // 'newsDate',
           ['class' => 'yii\grid\ActionColumn'],
       ],
   ]); ?>*/
use yii\widgets\ListView;
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

                    
                    <?= ListView::widget([
                     'id'=>'postList',
                     'dataProvider'=>$dataProvider0,
                     'itemView'=>'_listproitem',//子视图,显示一篇文章的标题等内容.
                     'layout'=>'{items} {pager}',
                      
                       ])?>

 
                   

                    <a class="btn btn-default" href="/advanced/frontend/web/index.php?r=site-dispqry-projects%2Findex">More &raquo;</a>
                    
                </div>
                <div class="col-lg-12">
                    <h2>News</h2>

                    
                    <?= ListView::widget([
                    'id'=>'postList',
                     'dataProvider'=>$dataProvider,
                     'itemView'=>'_listnewsitem',//子视图,显示一篇文章的标题等内容.
                     'layout'=>'{items} {pager}',
                      
                       ])?>

                    

                   <a class="btn btn-default" href="/advanced/frontend/web/index.php?r=site-dispqry-news%2Findex">More &raquo;</a>
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


