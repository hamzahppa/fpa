<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Website yang dibangun untuk menghitung perkiraan ukuran software">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

    <!-- Styles and fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/material.css">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header">

		</header>
		<main class="mdl-layout__content">
			<div class="mdl-grid fpa-content" style="justify-content: center;">
				<!-- Content -->
				<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
					<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
						<h2 class="mdl-card__title-text">Login</h2>
					</div>
					<div class="mdl-card__supporting-text">
						<form action="#">
							<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
								<input class="mdl-textfield__input" type="text" id="username" />
								<label class="mdl-textfield__label" for="username">Username</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
								<input class="mdl-textfield__input" type="password" id="userpass" />
								<label class="mdl-textfield__label" for="userpass">Password</label>
							</div>
						</form>
					</div>
					<div class="mdl-card__actions mdl-card--border">
						<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="index.php">
							Login
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
</body>
</html>