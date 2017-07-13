
<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170712
 * This is the details view file of site-dispqry-writings page of frontend site.
 */ 
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use frontend\components\TagsCloudWidget;
use frontend\components\RctReplyWidget;

use yii\helpers\HtmlPurifier;
use common\models\SiteDispqryWritings;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title=$model->wrtTitle;
$this->params['breadcrumbs'][] = 'Writing'; 
?>
<div class="site-about">
    <h1>Writing</h1>
    <div class="titlecontents">
        <h2 id="new" class="primary-title" style="margin-top: 60px;margin-bottom: 10px"><?=$model->wrtTitle?></h2>
     </div>
    <div class="date"><?=date('Y-m-d',$model->wrtDate);?></div>
     <div class="wrtcontent">
        <div class="article">
            <?= nl2br($model->wrtContent)?>
        </div>
     </div>
    
</div>

