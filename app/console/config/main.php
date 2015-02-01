<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'gii'],
    'controllerNamespace' => 'console\controllers',
    'modules' => [
        'gii' => 'yii\gii\Module',
    ],
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
    'params' => $params,
];

return [

   'components' => [
   
    'mail' => [
      'class' => 'yii\swiftmailer\Mailer',
      'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => 'localhost',
        'username' => 'shustr8@gmail.com',
        'password' => 'admin',
        'port' => '465',
        'encryption' => 'ssl',
      ],
    ],
  ]
];