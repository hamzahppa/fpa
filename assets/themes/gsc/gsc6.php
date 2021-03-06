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
	<link rel="stylesheet" type="text/css" href="../styles/material.css">
	<link rel="stylesheet" type="text/css" href="../styles/styles.css">
	<link rel="stylesheet" type="text/css" href="../styles/table-style.css">
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
				<a class="mdl-navigation__link" href="../index.php">Add Project</a>
				<a class="mdl-navigation__link" href="../addtdi.php">Input TDI</a>
				<a class="mdl-navigation__link" href="../addfunction.php">Add Function</a>
				<a class="mdl-navigation__link" href="../count.php">Count FP and LOC</a>
			</nav>
		</div>
		<main class="mdl-layout__content">
			<div class="mdl-grid fpa-content">
				<!-- Content -->
				<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
					<div class="mdl-card__title">
						<h2 class="mdl-card__title-text">Online Data Entry</h2>
					</div>

					<div class="mdl-card__supporting-text">
					Online data entry and control functions are provided in the application.
						<ul class="mdl-list">
							<li class="mdl-list__item">
								<span class="mdl-list__item-primary-content">
									All transactions are processed in batch mode.
								</span>
								<span class="mdl-list__item-secondary-action">
									<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-1">
										<input type="radio" id="list-option-1" class="mdl-radio__button" name="options-1" value="0" checked />
									</label>
								</span>
							</li>
							<li class="mdl-list__item">
								<span class="mdl-list__item-primary-content">
									1% to 7% of transactions are interactive data entry.
								</span>
								<span class="mdl-list__item-secondary-action">
									<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-2">
										<input type="radio" id="list-option-2" class="mdl-radio__button" name="options-1" value="1"/>
									</label>
								</span>
							</li>
							<li class="mdl-list__item">
								<span class="mdl-list__item-primary-content">
									8% to 15% of transactions are interactive data entry.
								</span>
								<span class="mdl-list__item-secondary-action">
									<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-3">
										<input type="radio" id="list-option-3" class="mdl-radio__button" name="options-1" value="2"/>
									</label>
								</span>
							</li>
							<li class="mdl-list__item">
								<span class="mdl-list__item-primary-content">
									16% to 23% of transactions are interactive data entry.
								</span>
								<span class="mdl-list__item-secondary-action">
									<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-4">
										<input type="radio" id="list-option-4" class="mdl-radio__button" name="options-1" value="3"/>
									</label>
								</span>
							</li>
							<li class="mdl-list__item">
								<span class="mdl-list__item-primary-content">
									24% to 30% of transactions are interactive data entry.
								</span>
								<span class="mdl-list__item-secondary-action">
									<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-5">
										<input type="radio" id="list-option-5" class="mdl-radio__button" name="options-1" value="4"/>
									</label>
								</span>
							</li>
							<li class="mdl-list__item">
								<span class="mdl-list__item-primary-content">
									More than 30% of transactions are interactive data entry.
								</span>
								<span class="mdl-list__item-secondary-action">
									<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-6">
										<input type="radio" id="list-option-6" class="mdl-radio__button" name="options-1" value="5"/>
									</label>
								</span>
							</li>
						</ul>
					</div>
					<div class="mdl-card__actions mdl-card--border">
						<a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="gsc5.php">
							Previous
						</a>
						<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="gsc7.php">
							Next
						</a>
					</div>
				</div>
				<!-- End Content -->
			</div>
		</main>
	</div>
	
	<!-- script -->
	<script src="../js/material.js" type="text/javascript"></script>
	<script src="../js/jquery.min.js" type="text/javascript"></script>
	<script src="../js/table.js" type="text/javascript"></script>
	<script src="../js/dynamicInput.js" type="text/javascript"></script>
</body>
</html>