<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'timeZone' => 'Asia/Shanghai',
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'language' => 'zh_cn',
    'sourceLanguage' => 'zh_cn',
    'name' => 'Config.name',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        //'admin.components.*'
    ),
    'modules' => array(
        // uncomment the following to enable the Gii tool
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123456',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
        'admin' => array(

        )
    ),
    // application components
    'components' => array(
        'db' => array(
            'class' => 'CDbConnection',
            'connectionString' => 'mysql:host=localhost;dbname=go9999_v2',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'tablePrefix'=>'t_'
        ),
        /*
        'cache' => array(
            'class'=>'CMemCache',
            'servers'=>array(
                array(
                    'host'=>'127.0.0.1',
                    'port'=>11211,
                    'weight'=>60,
                ),
                array(
                    'host'=>'server2',
                    'port'=>11211,
                    'weight'=>40,
                ),
            ),
            'keyPrefix' => 'yii_admin_',
            'hashKey' => false,
        ),
        */
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'loginUrl'=>array('admin/default/login'),
        ),
        // uncomment the following to enable URLs in path-format
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning, profile',
                ),
                // uncomment the following to show log messages on web pages
                /*
                array(
                    'class'=>'CWebLogRoute',
                ),
                */
            ),
        ),
        'clientScript' => array(
            //'packages'=>array(
            //    'jquery'=>false,
            //    'jquery.ui'=>false
            //),
        ),

    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        'company' => 'params.company',
    ),
);
