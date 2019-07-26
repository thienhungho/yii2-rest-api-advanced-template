<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'name' => require __DIR__ . '/name.php',
    'language'      => require __DIR__ . '/language.php',
    'components' => [
        /**
         * Cache Config
         */
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        /**
         * Log
         */
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        /**
         * URL MULTIPLE LANGUAGE
         * See more at: https://github.com/codemix/yii2-localeurls
         */
        'urlManager'  => [
            'class'               => 'codemix\localeurls\UrlManager',
            'languages'           => require __DIR__ . '/other-languages.php',
            'enablePrettyUrl'     => true,
            'showScriptName'      => false,
            'enableStrictParsing' => false,
            'rules'               => require __DIR__ . '/rule.php',
        ],
        /**
         * Yii2Mod RBAC Module
         * See more at: https://github.com/yii2mod/yii2-rbac
         */
        'authManager' => [
            'class'        => 'yii\rbac\DbManager',
            'defaultRoles' => [
                'guest',
                'user',
            ],
        ],
        /**
         * Edit Response
         */
        'response'    => [
            'on beforeSend' => function($event) {
                $event->sender->headers->add('X-Hello-Human', 'Looking for a girl :) thienhungho@gmail.com');
                $event->sender->headers->add('X-Powered-By', 'ASP.NET');
                $event->sender->headers->add('X-Served-By', 'cache-sin18020-SIN');
            },
        ],
    ],
    'modules'       => [
        /**
         * Yii2Mod RBAC Module
         * See more at: https://github.com/yii2mod/yii2-rbac
         */
        'rbac'             => [
            'class'     => 'yii2mod\rbac\Module',
            'as access' => [
                'class' => 'yii2mod\rbac\filters\AccessControl',
            ],
        ],
    ]
];
