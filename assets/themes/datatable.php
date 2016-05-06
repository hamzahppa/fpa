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
				<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
					<div class="mdl-card__title">
						<h2 class="mdl-card__title-text">Add Table</h2>
					</div>
					<div class="fpa-supporting-text mdl-card__supporting-text">
						Add table and data field
						<form action="#" class="fpa-supporting-text mdl-card__supporting-text" id="dynamicInput">
							<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
								<input class="mdl-textfield__input" type="text" id="nama">
								<label class="mdl-textfield__label" for="nama">Table Name</label>
							</div>
							<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
								<div class="mdl-card__title">
									<h4 class="mdl-card__title-text">Add Column</h4>
								</div>
								<div class="mdl-card__supporting-text" id="column">
									Add Table Column
									<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
										<input class="mdl-textfield__input" type="text" id="DET">
										<label class="mdl-textfield__label" for="DET">Data</label>
									</div>
								</div>
								<div class="mdl-card__actions mdl-card--border">
									<input type="button" value="Add Field" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" id="addcolumn" onClick="addInput('column');">
								</div>
							</div>
						</form>
					</div>
					<div class="mdl-card__actions mdl-card--border">
						<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="addfunction.php">
							Save Table
						</a>
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