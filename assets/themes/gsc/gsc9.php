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
						<h2 class="mdl-card__title-text">Complex Processing</h2>
					</div>

					<div class="mdl-card__supporting-text">
				  	Complex processing is a characteristic of the application. The following components are present.</br>
				  	• Sensitive control (for example, special audit processing) and/or application specific security processing</br>
				  	• Extensive logical processing</br>
				  	• Extensive mathematical processing</br>
				  	• Much exception processing resulting in incomplete transactions that must be processed again, for example, incomplete ATM transactions caused by TP interruption, missing data values, or failed edits</br>
				  	• Complex processing to handle multiple input/output possibilities, for example, multimedia, or device independence</br>
						<ul class="mdl-list">
							<li class="mdl-list__item">
								<span class="mdl-list__item-primary-content">
									None of the above.
								</span>
								<span class="mdl-list__item-secondary-action">
									<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-1">
										<input type="radio" id="list-option-1" class="mdl-radio__button" name="options-1" value="0" checked />
									</label>
								</span>
							</li>
							<li class="mdl-list__item">
								<span class="mdl-list__item-primary-content">
									Any one of the above.
								</span>
								<span class="mdl-list__item-secondary-action">
									<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-2">
										<input type="radio" id="list-option-2" class="mdl-radio__button" name="options-1" value="1"/>
									</label>
								</span>
							</li>
							<li class="mdl-list__item">
								<span class="mdl-list__item-primary-content">
									Any two of the above.
								</span>
								<span class="mdl-list__item-secondary-action">
									<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-3">
										<input type="radio" id="list-option-3" class="mdl-radio__button" name="options-1" value="2"/>
									</label>
								</span>
							</li>
							<li class="mdl-list__item">
								<span class="mdl-list__item-primary-content">
									Any three of the above.
								</span>
								<span class="mdl-list__item-secondary-action">
									<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-4">
										<input type="radio" id="list-option-4" class="mdl-radio__button" name="options-1" value="3"/>
									</label>
								</span>
							</li>
							<li class="mdl-list__item">
								<span class="mdl-list__item-primary-content">
						    		Any four of the above.
								</span>
								<span class="mdl-list__item-secondary-action">
									<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-5">
										<input type="radio" id="list-option-5" class="mdl-radio__button" name="options-1" value="4"/>
									</label>
								</span>
							</li>
							<li class="mdl-list__item">
								<span class="mdl-list__item-primary-content">
							    	All five of the above.
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
						<a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="gsc8.php">
							Previous
						</a>
						<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="gsc10.php">
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