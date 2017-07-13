<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SiteDispqryProjects */

$this->title = 'Create Site Dispqry Projects';
$this->params['breadcrumbs'][] = ['label' => 'Site Dispqry Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-dispqry-projects-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
