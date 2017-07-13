<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryNews */

$this->title = 'Create Site Dispqry News';
$this->params['breadcrumbs'][] = ['label' => 'Site Dispqry News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-dispqry-news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
