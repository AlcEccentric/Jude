<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170712
 * This is the _listnewsitem view file of site index page of frontend site.
 */  
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
?>
<p>
<a class="news" style="color: white"  href="<?= $model->url;?>"><?=$model->newsTitle;?> &raquo;
                    <span style="float: right;"><?= date('Y-m-d H:i:s',$model->newsDate);?></span>
                    </a>
</p>