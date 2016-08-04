<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Function Point Analysis',
	'defaultController'=>'login/index',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.YiiMailer.YiiMailer',
	),

	'modules'=>array(
		'fpa',
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'fpa',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'class'=>'WebUser',
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		// 'db'=>array(
		// 	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		// ),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=sql_fpa',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'YiiMailer'=>array(
			'viewPath' => 'application.views.mail',
			'layoutPath' => 'application.views.layouts',
			'baseDirPath' => 'webroot.images.mail', //note: 'webroot' alias in console apps may not be the same as in web apps
			'savePath' => 'webroot.assets.mail',
			'testMode' => false,
			'layout' => 'mail',
			'CharSet' => 'UTF-8',
			'AltBody' => Yii::t('YiiMailer', 'You need an HTML capable viewer to read this message.'),
			'language' => array(
				'authenticate' => Yii::t('YiiMailer', 'SMTP Error: Could not authenticate.'),
				'connect_host' => Yii::t('YiiMailer', 'SMTP Error: Could not connect to SMTP host.'),
				'data_not_accepted' => Yii::t('YiiMailer', 'SMTP Error: Data not accepted.'),
				'empty_message' => Yii::t('YiiMailer', 'Message body empty'),
				'encoding' => Yii::t('YiiMailer', 'Unknown encoding: '),
				'execute' => Yii::t('YiiMailer', 'Could not execute: '),
				'file_access' => Yii::t('YiiMailer', 'Could not access file: '),
				'file_open' => Yii::t('YiiMailer', 'File Error: Could not open file: '),
				'from_failed' => Yii::t('YiiMailer', 'The following From address failed: '),
				'instantiate' => Yii::t('YiiMailer', 'Could not instantiate mail function.'),
				'invalid_address' => Yii::t('YiiMailer', 'Invalid address'),
				'mailer_not_supported' => Yii::t('YiiMailer', ' mailer is not supported.'),
				'provide_address' => Yii::t('YiiMailer', 'You must provide at least one recipient email address.'),
				'recipients_failed' => Yii::t('YiiMailer', 'SMTP Error: The following recipients failed: '),
				'signing' => Yii::t('YiiMailer', 'Signing Error: '),
				'smtp_connect_failed' => Yii::t('YiiMailer', 'SMTP Connect() failed.'),
				'smtp_error' => Yii::t('YiiMailer', 'SMTP server error: '),
				'variable_set' => Yii::t('YiiMailer', 'Cannot set or reset variable: ')
			),
			// SMTP Config
			'Mailer' => 'smtp',
			'Host' => 'smtp.gmail.com',
			'Port' => '465',
			'SMTPSecure' => 'ssl',
			'SMTPAuth' => true,
			'Username' => 'tmenulis@gmail.com',
			'Password' => '081329017460abd',
			// 'Mailer' => 'smtp',
			// 'Host' => 'smtp.gmail.com',
			// 'Port' => '587',
			// 'SMTPSecure' => 'tls',
			// 'SMTPAuth' => true,
			// 'Username' => 'tmenulis@gmail.com',
			// 'Password' => '081329017460abd',
		),
	),
);