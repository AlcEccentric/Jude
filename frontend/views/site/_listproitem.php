<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170712
 * This is the _listproitem view file of site index page of frontend site.
 */  
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

?>
<div class="project" style="margin-bottom: 20px;">
<a class="proa" href="/advanced/frontend/web/index.php?r=site-dispqry-projects%2Findex">
                        <h2 class="des">
                            <div><?=$model->proName;?></div>
                        </h2>
                        <img class="proimg" style="margin-right: 20px" src="projects_pic/abstract-thumb-128x128-225.jpg" alt="project image">
                        <span><?=$model->proName;?></span>
</a>
</div>