<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'vendor/plugins/summernote/summernote.css',
        'assets/skin/default_skin/css/theme.css',
        'assets/admin-tools/admin-forms/css/admin-forms.css',
    ];
    public $js = [
        'vendor/jquery/jquery_ui/jquery-ui.min.js',
        'vendor/plugins/summernote/summernote.min.js',
        'assets/js/utility/utility.js',
        'assets/js/demo/demo.js',
        'assets/js/main.js',
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        
    ];
}
