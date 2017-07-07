<?php
/*
	Team: JUDE
    Last Coded By: Li Hongyi, 1511373, 6 July 2017
    This is a modified php document to build up the structure of the news site.
*/
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '王毅文';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div id="main">
	

		<h3>Yiwen Wang</h3> 
		<table border="0">
		<tbody><tr>
			<td width="175"><img src="img/my.jpg" width="150" style="border-radius: 10px;"> </td>
			<td> <b>project Assistant Professor</b> 	<br>	
		    <a href="http://www-ui.is.s.u-tokyo.ac.jp/" target="_blank">User Interface Research Group</a> <br>	
			<a href="http://www.i.u-tokyo.ac.jp/edu/course/cs/index.shtml" target="_blank">Department of Computer Science</a> <br>	
			<a href="http://www.i.u-tokyo.ac.jp/" target="_blank">Graduate School of Information Science and Technology</a>  <br>	
			<a href="http://www.i.u-tokyo.ac.jp/index_e.shtml" target="_blank">The University of Tokyo</a> 
			<h2>[ <img src="img/gmail.png" height="25">   xiehr at acm.org  ] <br>
				[  <img src="img/cv.png" height="25"> <a href="" target="_blank">CV</a>  ] [  <img src="img/git.png" height="25"> <a href="https://github.com/shasph" target="_blank">GitHub</a>  ]
				[  <img src="img/fb.png" height="25"> <a href="https://www.facebook.com/haoran.xie.5" target="_blank">Facebook</a>  ]</h2>
			</td>
		</tr>
		</tbody></table>

		<h2><a style="color:#FF0000">NEWS</a></h2>
		<ul style="font-size:10pt">
		<li>2017.04 <i>Become a project Assistant Professor of <a href="http://www.i.u-tokyo.ac.jp/edu/course/cs/" target="_blank">Computer Science Department</a>!</i> </li>
		<li>2017.03 <i>Co-authored paper has been accpeted in  <a href="http://fj.ics.keio.ac.jp/cgi17/" target="_blank">CGI2017</a> and The Visual Computer!</i> </li>
		<li>2017.03 <i>Our work has been supported by <a href="http://www.epson-kokusaisyogaku.jp/" target="_blank">EPSON Foundation!</a></i> </li>	
		</ul>
			
		<h3>Research Interests</h3>
			<ul>
				Mainly in <b>Computer Graphics</b>, <b>Human-Computer Interaction</b>, and <b>Digital Fabrication</b>. <br><br>
				Especially, in the usage of <b>Data-Driven Techniques</b> where the future scientific discovery benefits from variety data, 
				as <a href="http://research.microsoft.com/en-us/collaboration/fourthparadigm/" target="_blank">The Fourth Paradigm</a>.  My PhD work has condsidered 
				data-driven approaches for complex turbulent dynamics.<br> 
			</ul>

		<h3>Projects</h3>
		<table border="0">
		<tbody><tr>
			<td><img src="img/robot.png" height="100" align="right"></td>
		    <td><h2><b>Vision-based Robot Drawing</b></h2>
			Robot arm control with computer vision.<br>
			[<a href="publication/robot-HMI.pdf">PDF</a>][[<a href="https://www.youtube.com/watch?v=b-71IUWqFGs" target="_blank">Video</a>]
		</td>
		</tr>

		<tr>
			<td><img src="img/pattern.png" height="130" align="right"></td>
		<td><h2><b>Pattern-based <u>Immersed Rigid Body Dynamics</u></b></h2>
			Physical model with parameter subspaces from different motion patterns.<br>
			[MIG 2015][<a href="publication/MIG-sha-1117-Paris.pdf">PPT</a>]
		</td>
		</tr>
		<tr>
			<td><img src="img/reduce.png" height="100" align="right"></td>
		<td><h2><b>Model Reduction of Dynamical Systems</b></h2>
			A new reduction method using separated representation in contrast to Proper Orthogonal Decomposition.<br>
			[MEIS 2014]|[Mathematics-for-Industry 2015]
		</td>
		</tr>
		<tr>
			<td><img src="img/stochastic.png" height="100" align="right"></td>
		<td><h2><b>Stochastic Model of <u>Immersed Rigid Body Dynamics</u></b></h2>
			Kirchoff model of body dynamics with precomputation vortex dynamics in Langevin model. <br>
			[NICOInt 2013]|[SIGGRAPH Asia 2013]|[J. 2014]
		</td>
		</tr>
		<tr>
		<td><img src="img/graph.png" height="100" align="right"></td>
		<td><h2><b>Graph-based <u>Immersed Rigid Body Dynamics</u></b></h2>
			Motion synthesis of the rigid body motions in flow using motion graph. <br>
			[NICOInt 2011]|[SIGGRAPH Asia 2011]|[CGI 2012]|[TVC 2014]
		</td>
		</tr>
		</tbody>
		</table>


	</div>

    
</div>
