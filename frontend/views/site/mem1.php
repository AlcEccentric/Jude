<?php
/*
	Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 6 July 2017
    This is a modified php document to build up the structure of the news site.
*/
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '王毅文';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="mem">
	    <div id="main">
		

			<h3>Yiwen Wang</h3> 
			<table border="0">
				<tbody>
					<tr>
						<td width="175"><img src="img/my.jpg" width="150" style="border-radius: 10px;"> 
						</td>
						
						<td> 
							<b>A Sophomore</b> 
							
							<br>	
					    	
					    	<span>学号:</span> <span>xxxxxx</span> 
					    	
					    	<br>	
							
							<span>年龄:</span> <span>xxxx</span> <span>岁</span>
							
							<br>	
							
							<span>入队日期:</span> 
								<span>xxxx</span> <span>年</span>
								<span>xx</span> <span>月</span>
								<span>xx</span> <span>日</span>

							<br>	
							
							<span>学院:</span> <span>xxxxx</span> 

							<br>	
							
							<span>系别:</span> <span>xxxxx</span> 
							
						
							<h2>
									
								
							
							</h2>
						
						</td>
					</tr>
				</tbody>
			</table>

			



			<h3><a href="/advanced/frontend/web/index.php?r=site%2Fnews">NEWS</a></h3>
			<ul style="font-size:10pt">
				<li>
					<span>2017.07.01</span>
					
					<a href="/advanced/frontend/web/index.php?r=site%2Fnews" target="_blank">Become a project Assistant Professor of Computer Science Department!</a>
					 
				</li>
				<li> 

					<span>2017.07.02</span>
					
					<a href="/advanced/frontend/web/index.php?r=site%2Fnews" target="_blank">Become a project Assistant Professor of Computer Science Department!</a>
					  
				</li>
				<li> 
					
					<span>2017.07.03</span>
					
					<a href="/advanced/frontend/web/index.php?r=site%2Fnews" target="_blank">Become a project Assistant Professor of Computer Science Department!</a> 

				</li>	
			</ul>
				
			



			<h3><a href="">WRITINGS</a></h3>
			<ul style="font-size:10pt">
				<li>
					<span>2017.07.01</span>
					
					<a href="" target="_blank">Become a project Assistant Professor of Computer Science Department!</a>
					 
				</li>
				<li> 

					<span>2017.07.02</span>
					
					<a href="" target="_blank">Become a project Assistant Professor of Computer Science Department!</a>
					  
				</li>
				<li> 
					
					<span>2017.07.03</span>
					
					<a href="" target="_blank">Become a project Assistant Professor of Computer Science Department!</a> 
					
				</li>	
			</ul>

			

			<h3><a href="/advanced/frontend/web/index.php?r=site%2Fprojects">PROJECTS</a></h3>
			<table border="0">
			
			<tbody>

			
			<tr>
					<td>
						<img src="projects_pic/abstract-thumb-128x128-225.jpg" height="100" align="right">
					</td>



					<td>

						<h2><b>Model Reduction of Dynamical Systems</b></h2>
						<span>Paticipating Time:</span> <span>2017.07.03</span>
						<br>
						A new reduction method using separated representation in contrast to Proper Orthogonal Decomposition.
						<br>
		
					</td>
			</tr>
			
			<tr>
				<td>
					<img src="projects_pic/abstract-thumb-128x128-225.jpg" height="100" align="right">
				</td>

				<td>
						<h2><b>Model Reduction of Dynamical Systems</b></h2>
						<span>Paticipating Time:</span> <span>2017.07.03</span>
						<br>
						A new reduction method using separated representation in contrast to Proper Orthogonal Decomposition.
						<br>
				</td>
			</tr>
			
			</tbody>
			</table>


		</div>

	</div>   

    
</div>
