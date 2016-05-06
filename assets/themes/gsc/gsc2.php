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
						<h2 class="mdl-card__title-text">Distributed Data Processing</h2>
					</div>

					<div class="mdl-card__supporting-text">
						Distributed data or processing functions are a characteristic of the application within the application boundary.
						<ul class="fpa-list-control mdl-list">
							<li class="mdl-list__item">
								<span class="mdl-list__item-primary-content">
									Application does not aid the transfer of data or processing function between components of the system.
								</span>
								<span class="mdl-list__item-secondary-action">
									<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-7">
										<input type="radio" id="list-option-7" class="mdl-radio__button" name="options-2" value="0" checked />
									</label>
								</span>
							</li>
							<li class="mdl-list__item">
								<span class="mdl-list__item-primary-content">
									Application prepares data for end user processing on another component of the system such as PC spreadsheets and PC DBMS.
								</span>
								<span class="mdl-list__item-secondary-action">
									<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-8">
										<input type="radio" id="list-option-8" class="mdl-radio__button" name="options-2" value="1"/>
									</label>
								</span>
							</li>
							<li class="mdl-list__item">
								<span class="mdl-list__item-primary-content">
									Data is prepared for transfer, then is transferred and processed on another component of the system (not for enduser processing).
								</span>
								<span class="mdl-list__item-secondary-action">
									<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-9">
										<input type="radio" id="list-option-9" class="mdl-radio__button" name="options-2" value="2"/>
									</label>
								</span>
							</li>
							<li class="mdl-list__item">
								<span class="mdl-list__item-primary-content">
									Distributed processing and data transfer are online and in one direction only.
								</span>
								<span class="mdl-list__item-secondary-action">
									<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-10">
										<input type="radio" id="list-option-10" class="mdl-radio__button" name="options-2" value="3"/>
									</label>
								</span>
							</li>
							<li class="mdl-list__item">
								<span class="mdl-list__item-primary-content">
									Distributed processing and data transfer are online and in both directions.
								</span>
								<span class="mdl-list__item-secondary-action">
									<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-11">
										<input type="radio" id="list-option-11" class="mdl-radio__button" name="options-2" value="4"/>
									</label>
								</span>
							</li>
							<li class="mdl-list__item">
								<span class="mdl-list__item-primary-content">
									Processing functions are dynamically performed on the most appropriate component of the system.
								</span>
								<span class="mdl-list__item-secondary-action">
									<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-12">
										<input type="radio" id="list-option-12" class="mdl-radio__button" name="options-2" value="5"/>
									</label>
								</span>
							</li>
						</ul>
					</div>

					<div class="mdl-card__actions mdl-card--border">
						<a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="../addtdi.php">
							Previous
						</a>
						<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="gsc3.php">
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