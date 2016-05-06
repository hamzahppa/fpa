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
						<h2 class="mdl-card__title-text">Functions</h2>
					</div>
					<div class="fpa-supporting-text mdl-card__supporting-text">
					Add Function to complete the calculation. You can add more than 1 function depends on your project you want to calculate
						<div class="fpa-supporting-text mdl-card__supporting-text">
							<div class="table-responsive-vertical shadow-z-1">
								<!-- Table starts here -->
								<table id="table" class="table table-hover table-bordered">
									<thead>
										<tr>
											<th>No</th>
											<th>Function</th>
											<th>Type</th>
											<th>Programming</th>
											<th>DET</th>
											<th>RET</th>
											<th>FTR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td data-title="No">1</td>
											<td data-title="Function">User</td>
											<td data-title="Type">ILF</td>
											<td data-title="Programming">SQL</td>
											<td data-title="DET">6</td>
											<td data-title="RET">1</td>
											<td data-title="FTR">-</td>
										</tr>
										<tr>
											<td data-title="No">2</td>
											<td data-title="Function">Booking</td>
											<td data-title="Type">ILF</td>
											<td data-title="Programming">SQL</td>
											<td data-title="DET">11</td>
											<td data-title="RET">2</td>
											<td data-title="FTR">-</td>
										</tr>
										<tr>
											<td data-title="No">3</td>
											<td data-title="Function">Pegawai</td>
											<td data-title="Type">ILF</td>
											<td data-title="Programming">SQL</td>
											<td data-title="DET">5</td>
											<td data-title="RET">1</td>
											<td data-title="FTR">-</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="mdl-card__actions mdl-card--border">
						<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="datafunction.php">
							Add Function
						</a>
					</div>
				</div>

				<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
					<div class="mdl-card__title">
						<h2 class="mdl-card__title-text">Tables</h2>
					</div>
					<div class="fpa-supporting-text mdl-card__supporting-text">
						Add Table to complete the calculation. You can add more than 1 table depends on your project you want to calculate
						<div class="fpa-supporting-text mdl-card__supporting-text">
						    <div class="table-responsive-vertical shadow-z-1">
								<!-- Table starts here -->
								<table id="table" class="table table-hover table-bordered">
									<thead>
										<tr>
											<th>No</th>
											<th>Table</th>
											<th>Type</th>
											<th>Programming</th>
											<th>DET</th>
											<th>RET</th>
											<th>FTR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td data-title="No">1</td>
											<td data-title="Function">User</td>
											<td data-title="Type">ILF</td>
											<td data-title="Programming">SQL</td>
											<td data-title="DET">6</td>
											<td data-title="RET">1</td>
											<td data-title="FTR">-</td>
										</tr>
										<tr>
											<td data-title="No">2</td>
											<td data-title="Function">Booking</td>
											<td data-title="Type">ILF</td>
											<td data-title="Programming">SQL</td>
											<td data-title="DET">11</td>
											<td data-title="RET">2</td>
											<td data-title="FTR">-</td>
										</tr>
										<tr>
											<td data-title="No">3</td>
											<td data-title="Function">Pegawai</td>
											<td data-title="Type">ILF</td>
											<td data-title="Programming">SQL</td>
											<td data-title="DET">5</td>
											<td data-title="RET">1</td>
											<td data-title="FTR">-</td>
										</tr>
									</tbody>
								</table>
						    </div>
						</div>
					</div>
					<div class="mdl-card__actions mdl-card--border">
						<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="datatable.php">
							Add Table
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