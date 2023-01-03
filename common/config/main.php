<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'cache' => [
            'class' => \yii\caching\FileCache::class,
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

    'components' => [
        
    'authManager' => [
        'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\PhpManager'
    ],
    'user' => [
        'identityClass' => 'mdm\admin\models\User',
        'loginUrl' => ['admin/user/login'],
        'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
    ],
]
    

];


