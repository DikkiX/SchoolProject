<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DBManager',
        ],
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'user' => [
            'identityClass' => 'mdm\admin\models\User',
            'loginUrl' => ['admin/user/login'],
        ],
    ],

    'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            'admin/*',
        ]
        ],
],
    

];


