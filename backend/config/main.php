
<?php
/**
 * Team: Jude
 * Coding By: lihongyi 1511373, 20170710
 * This is the main config file of backend site.
 */    

/*    
    这是一个用于配置后台环境的配置文件，最后由李弘毅于7月10日编辑，修改了系统语言，并且为了分离前后台的登录系统，
    增加了session属性，用于给后台另设session.

*/
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'language'=>'zh-CN',//修改界面语言
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\SiteDispMembers',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session'=>[//分离前后台的session
                'name'=>'PHPBACKSESSION',
                'savePath'=>sys_get_temp_dir(),
        ],
        'request'=>[
                'cookieValidationKey'=>'sdfjjksloeedf78789judf',
                'csrfParam'=>'_adminCSRF',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
