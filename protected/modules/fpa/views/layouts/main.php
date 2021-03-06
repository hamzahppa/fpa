<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Website yang dibangun untuk menghitung perkiraan ukuran software">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/themes/img/favicon.ico" type="image/x-icon" />

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- Styles and fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/themes/styles/material.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/themes/styles/styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/themes/styles/table-style.css">
</head>
<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">Function Point Analysis</span>
				<?php if (isset(Yii::app()->session['workonproject_name'])): ?>
				<button id="project-menu" class="mdl-button mdl-js-button mdl-button--icon" style="margin-left: 5px;">
					<i class="material-icons">folder</i>
				</button>
				<div style="margin-left: 5px;"><?php echo Yii::app()->session['workonproject_name']; ?></div>
				<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="project-menu">
					<?php if (Yii::app()->session['lang'] == "ID"): ?>
						<a class="mdl-menu__item" href="<?php echo Yii::app()->createUrl('fpa/project/done') ?>">Selesai</a>
					<?php else: ?>
						<a class="mdl-menu__item" href="<?php echo Yii::app()->createUrl('fpa/project/done') ?>">Done</a>
					<?php endif ?>
				</ul>
				<?php endif ?>

				<div class="mdl-layout-spacer"></div>
				<div style="margin-right: 10px;">
					<?php 
					// echo Yii::app()->user->name;
					 ?>
					<?php echo $this->getName(); ?>
				</div>
				<button id="logout-menu" class="mdl-button mdl-js-button mdl-button--icon">
					<i class="material-icons">person</i>
				</button>
				<button id="language-menu" class="mdl-button mdl-js-button mdl-button--icon">
					<i class="material-icons">book</i>
                </button>
				<?php if (Yii::app()->session['lang'] == "ID"): ?>
					<div style="margin-right: 10px;">Bahasa | Indonesia</div>
				<?php else: ?>
					<div style="margin-right: 10px;">Language | English</div>
				<?php endif ?>

				<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="logout-menu">
					<?php if (Yii::app()->session['lang'] == "ID"): ?>
						<a class="mdl-menu__item" href="<?php echo Yii::app()->createUrl('login/logout') ?>">Keluar</a>
					<?php else: ?>
						<a class="mdl-menu__item" href="<?php echo Yii::app()->createUrl('login/logout') ?>">Logout</a>
					<?php endif ?>
				</ul>
				<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    for="language-menu">
                    <a href="<?php echo Yii::app()->createUrl('fpa/project/lang', array('lang'=>'ID')) ?>" class="mdl-menu__item"><span style="font-weight: bold;">ID</span> | Indonesia</a>
                    <a href="<?php echo Yii::app()->createUrl('fpa/project/lang', array('lang'=>'EN')) ?>" class="mdl-menu__item"><span style="font-weight: bold;">EN</span> | English</a>
                </ul>
			</div>
		</header>
		<div class="mdl-layout__drawer">
			<span class="mdl-layout-title">Function Point</span>
			<?php if (Yii::app()->session['lang'] == "ID"): ?>
				<nav class="mdl-navigation">
					<a class="mdl-navigation__link" href="<?php echo Yii::app()->createUrl('fpa/project/index'); ?>">Project</a>
					<?php if (isset(Yii::app()->session['workonproject'])): ?>
					<a class="mdl-navigation__link" href="<?php echo Yii::app()->createUrl('fpa/tdi/index'); ?>">Tambah Nilai TDI</a>
					<a class="mdl-navigation__link" href="<?php echo Yii::app()->createUrl('fpa/function/index/'); ?>">Tambah Function</a>
					<a class="mdl-navigation__link" href="<?php echo Yii::app()->createUrl('fpa/count/index/'); ?>">Hitung FP dan LOC</a>
					<?php endif ?>
				</nav>
			<?php else: ?>
				<nav class="mdl-navigation">
					<a class="mdl-navigation__link" href="<?php echo Yii::app()->createUrl('fpa/project/index'); ?>">Project</a>
					<?php if (isset(Yii::app()->session['workonproject'])): ?>
						<a class="mdl-navigation__link" href="<?php echo Yii::app()->createUrl('fpa/tdi/index'); ?>">Input TDI</a>
						<a class="mdl-navigation__link" href="<?php echo Yii::app()->createUrl('fpa/function/index/'); ?>">Add Function</a>
						<a class="mdl-navigation__link" href="<?php echo Yii::app()->createUrl('fpa/count/index/'); ?>">Count FP and LOC</a>
					<?php endif ?>
				</nav>
			<?php endif ?>
		</div>
		<main class="mdl-layout__content">
			<div class="mdl-grid fpa-content">
				<!-- Content -->
				<?php echo $content; ?>
				<!-- End Content -->
			</div>
		</main>
	</div>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/themes/js/material.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/themes/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/themes/js/table.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/themes/js/dynamicInput.js" type="text/javascript"></script>
</body>
</html>