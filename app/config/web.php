<?php
    
    $params = require(__DIR__ . '/params.php');
    $db = require(__DIR__ . '/db.php');
    
    
    $basePath = dirname(__DIR__);
    
    $config = [
        'id'         => 'basic',
        'basePath'   => $basePath,
        'bootstrap'  => ['log'],
        'modules'    => [
            'admin' => [
                'class' => 'vendor\basili4\adminlte\admin',
            ],
        ],
        'components' => [
            'request' => [
                'enableCookieValidation' => true,
                'enableCsrfValidation'   => true,
                'cookieValidationKey'    => 'T5NdLPxpzyh4AVEeIiHNxEbVu0yjAf',
            ],
            'cache'        => [
                'class' => 'yii\caching\FileCache',
            ],
            'user'         => [
                'identityClass'   => 'app\models\User',
                'enableAutoLogin' => true,
            ],
            'errorHandler' => [
                'errorAction' => 'site/error',
            ],
            'mailer'       => [
                'class'            => 'yii\swiftmailer\Mailer',
                // send all mails to a file by default. You have to set
                // 'useFileTransport' to false and configure a transport
                // for the mailer to send real emails.
                'useFileTransport' => true,
            ],
            'log'          => [
                'traceLevel' => YII_DEBUG ? 3 : 0,
                'targets'    => [
                    [
                        'class'  => 'yii\log\FileTarget',
                        'levels' => ['error', 'warning'],
                    ],
                ],
            ],
            'db'           => $db,
            'urlManager'   => [
                'enablePrettyUrl' => true,
                'showScriptName'  => false,
                'rules'           => [
                    "admin/<action>" => "admin/default/<action>",
                ],
            ],
        ],
        'aliases'    => [
            '@bower'   => realpath($basePath . "/../vendor/bower-asset"),
            '@yii_gii' => realpath($basePath . "/../vendor/yiisoft/yii2-gii"),
            '@vendor' => realpath($basePath . "/../vendor"),
        ],
        'params'     => $params,
    ];
    
    
    if (YII_ENV_DEV) {
        // configuration adjustments for 'dev' environment
        $config['bootstrap'][] = 'debug';
        $config['modules']['debug'] = [
            'class' => 'yii\debug\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
        ];
        
        $config['bootstrap'][] = 'gii';
        $config['modules']['gii'] = [
            'class'      => 'yii\gii\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            'allowedIPs' => ['*'],
        ];
    }
    
    return $config;
