<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',

	// preloading 'log' component
	'preload'=>array('log'),

    // autoloading model and component classes
    'import'=>array(
        'application.models.*',
        //'application.components.*',
        //'application.modules.weixin.models.*',
    ),

	// application components
	'components'=>array(
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
		'db' => array(
			'class' => 'CDbConnection',
			'connectionString' => 'mysql:host=localhost;dbname=go9999_v2',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
			'tablePrefix'=>'t_'
		),
	),
);
