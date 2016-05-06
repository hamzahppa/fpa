<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Website yang dibangun untuk menghitung perkiraan ukuran software">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Function Point Analysis</title>

    <!-- Styles and fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/material.css">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link rel="stylesheet" type="text/css" href="styles/table-style.css">
</head>
<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">Function Point Analysis</span>
			</div>
		</header>
		<div class="mdl-layout__drawer">
			<span class="mdl-layout-title">Function Point</span>
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="index.php">Add Project</a>
				<a class="mdl-navigation__link" href="addtdi.php">Input TDI</a>
				<a class="mdl-navigation__link" href="addfunction.php">Add Function</a>
				<a class="mdl-navigation__link" href="count.php">Count FP and LOC</a>
			</nav>
		</div>
		<main class="mdl-layout__content">
			<div class="mdl-grid fpa-content">
				<!-- Content -->
				<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col mdl-grid">
					<div class="mdl-card__title">
						<h2 class="mdl-card__title-text">Function Point</h2>
					</div>
					<div class="mdl-card__supporting-text">
						Based on your data, your project has Function Point as described below
						<ul class="mdl-list">
							<li class="mdl-list__item mdl-list__item--two-line">
								<span class="mdl-list__item-primary-content">
									<i class="material-icons mdl-list__item-avatar" style="border-radius: 10%;">folder</i>
									<span>Avenger</span>
									<span class="mdl-list__item-sub-title">120 FP</span>
								</span>
							</li>
						</ul>
					</div>
				</div>

				<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col mdl-grid">
					<div class="mdl-card__title">
						<h2 class="mdl-card__title-text">LOC</h2>
					</div>
					<div class="mdl-card__supporting-text">
						By the Function Point your project have, it is estimated have the Line of Code (LOC) as described below
						<ul class="mdl-list">
							<li class="mdl-list__item mdl-list__item--two-line">
								<span class="mdl-list__item-primary-content">
									<i class="material-icons mdl-list__item-avatar" style="border-radius: 10%;">folder</i>
									<span>Avenger</span>
									<span class="mdl-list__item-sub-title">10238 LOC</span>
								</span>
							</li>
						</ul>
					</div>
				</div>
				<!-- End Content -->
			</div>
		</main>
	</div>
	
	<!-- script -->
	<script src="js/material.js" type="text/javascript"></script>
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/table.js" type="text/javascript"></script>
	<script src="js/dynamicInput.js" type="text/javascript"></script>
</body>
</html>