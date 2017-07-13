<?php
/*
    Team: JUDE
    Last Coded By: Li Hongyi, 1511373,11 July 2017
    This is a php document to build up a fundamental structure of the whole site.

*/
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    

    <style>
    html, body
    {
        height: 100%;
        background: #111111;
    }
    body
    {
        margin: 0px;
        padding: 0px;
        font-family: 'Didact Gothic', sans-serif;
        font-size: 12pt;
        font-weight: 200;
        color: #FFF;

 
    }

    h1, h2, h3
    {
        margin: 0;
        padding: 0;
    }

    h1{
    position: relative;
    top: 0px;
    left:0px;
    text-align: left;
    font-size: 4em;
    }
    
    p, ol, ul
    {
        margin-top: 0;
    }
    
    ol, ul
    {
        padding: 0;
        list-style: none;
    }
    
    p
    {
        line-height: 180%;
    }
    
    div.wrapper {
    position: relative;
    top:100px;
    padding: 0px 0em 0px 0em;
    
    height: 2em;
    font-family: 'Didact Gothic', sans-serif;
    font-size: 12pt;
    font-weight: 200;
    color: #FFF;
    height: 640px;
    
    }
    
    footer{
       position: absolute;
       bottom: -1600px;
       background-color: #9d9d9d;
       color: black;
       
    }
    footer>div{
        
        padding: 0 0 0 0;
    }
    div.searchbox{
        position: relative;
        bottom: 45px;
    }
    </style>
    
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap" >

    <?php
    NavBar::begin([
        'brandLabel' => 'Jude',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);


    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'News', 'url' => ['/site-dispqry-news/index']],
        ['label' => 'Projects', 'url' => ['/site-dispqry-projects/index']],
        ['label' => 'Members', 'url' => ['/site-disp-members/index']],
        
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->email . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
    


    
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

    

</div>






<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
