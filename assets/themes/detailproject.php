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
	<link rel="stylesheet" type="text/css" href="styles/table-style.css">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
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
						<h2 class="mdl-card__title-text">Overview</h2>
					</div>
					<div class="mdl-card__supporting-text">
						Here are the complete overview of this project 
					</div>
					<!-- Project Description -->
					<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
						<div class="fpa-card-title mdl-card__title">
							<h2 class="mdl-card__title-text">Project</h2>
						</div>
						<div class="mdl-card__supporting-text">
							<ul class="fpa-list-three mdl-list" style="padding-top: 0;">
							  <li class="fpa-list mdl-list__item mdl-list__item--three-line">
							    <span class="mdl-list__item-primary-content">
							      <i class="fpa-icon material-icons mdl-list__item-avatar" style="border-radius: 10%;">folder</i>
							      <span>Avenger</span>
							      <span class="mdl-list__item-text-body">
							      	Web Application to store user data, where data user will be saved and will be processed later.
							      </span>
							    </span>
							  </li>
							</ul>
						</div>
						<div class="mdl-card__actions mdl-card--border">
							<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="addproject.php">
								Edit Project Description
							</a>
						</div>
					</div>
					<!-- Project GSC -->
					<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
						<div class="fpa-card-title mdl-card__title">
							<h2 class="fpa-card-title mdl-card__title-text">General System Characteristic</h2>
						</div>
						<div class="mdl-card__supporting-text">
							<ul class="fpa-list-three mdl-list">
							  <li class="fpa-list mdl-list__item mdl-list__item--three-line">
							    <span class="mdl-list__item-primary-content">
							      <i class="fpa-icon material-icons mdl-list__item-avatar" style="border-radius: 10%;">data_usage</i>
							      <span>Data Communication</span>
							      <span class="mdl-list__item-text-body">
							      	Application is pure batch processing or a standalone PC
							      </span>
							    </span>
							  </li>
							</ul>
						</div>
						<div class="mdl-card__actions mdl-card--border">
							<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="addtdi.php">
								Edit GSC's
							</a>
						</div>
					</div>
					<!-- Project Function -->
					<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
						<div class="mdl-card__title">
							<h2 class="mdl-card__title-text">Function(s)</h2>
						</div>
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
						<div class="mdl-card__actions mdl-card--border">
							<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="datafunction.php">
								Edit Function
							</a>
						</div>
					</div>
					<!-- Project Table -->
					<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
						<div class="mdl-card__title">
							<h2 class="mdl-card__title-text">Table(s)</h2>
						</div>
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
						<div class="mdl-card__actions mdl-card--border">
							<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="datatable.php">
								Edit Table
							</a>
						</div>
					</div>
					<!-- Action -->
					<div class="mdl-card__actions mdl-card--border">
						<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="index.php">
							Done
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