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
            // 'defaultRoles' => ['admin', 'author'],
            // 'itemFile' => 'vendor\yiisoft\yii2\rbac\item.php', //Default path to items.php | NEW CONFIGURATIONS
            // 'assignmentFile' => 'rbac\assignments.php', //Default path to assignments.php | NEW CONFIGURATIONS
            // 'ruleFile' => 'rbac\rules.php', //Default path to rules.php | NEW CONFIGURATIONS
        ],
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'user' => [
            // 'class' => 'mdm\admin\models\User',
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


