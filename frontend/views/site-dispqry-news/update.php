<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryNews */

$this->title = 'Update Site Dispqry News: ' . $model->newsId;
$this->params['breadcrumbs'][] = ['label' => 'Site Dispqry News', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->newsId, 'url' => ['view', 'id' => $model->newsId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="site-dispqry-news-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
