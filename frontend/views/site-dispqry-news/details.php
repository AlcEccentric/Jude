<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170710
 * This is the datails view file of site-dispqry-news page of frontend site.
 */ 
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use frontend\components\TagsCloudWidget;
use frontend\components\RctReplyWidget;

use yii\helpers\HtmlPurifier;
use common\models\SiteDispqryComment;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title=$model->newsTitle;
$this->params['breadcrumbs'][] = 'News'; 
?>
<div class="site-about">
    <h1>News</h1>
	<div class="titlecontents">
        <h2 id="new" class="primary-title" style="margin-top: 60px;margin-bottom: 10px"><?=$model->newsTitle?></h2>
     </div>
	<div class="date"><?=date('Y-m-d',$model->newsDate);?></div>
     <div class="wrtcontent">
     	<div class="article">
     		<?= nl2br($model->newsContent)?>
     	</div>
     </div>
    
</div>
