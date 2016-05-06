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
						</tr>
					</thead>
					<tbody>
					<?php $i=1; foreach ($modelTable as $Tables): ?>
						<tr>
							<td data-title="No"><?php echo $i++; ?></td>
							<td data-title="Function"><?php echo $Tables->nama_fp; ?></td>
							<td data-title="Type"><?php echo $Tables->tipe; ?></td>
							<td data-title="Programming"><?php echo $Tables->bahasa; ?></td>
							<td data-title="DET"><?php echo $Tables->DET; ?></td>
							<td data-title="RET"><?php echo $Tables->RET; ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
		    </div>
		</div>
	</div>
	<div class="mdl-card__actions mdl-card--border">
		<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/function/addTable') ?>">
			Add Table
		</a>
	</div>
</div>

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
							<th>FTR</th>
						</tr>
					</thead>
					<tbody>
					<?php $i=1; foreach ($modelFunction as $Fps): ?>
						<tr>
							<td data-title="No"><?php echo $i++ ?></td>
							<td data-title="Function"><?php echo $Fps->nama_fp; ?></td>
							<td data-title="Type"><?php echo $Fps->tipe; ?></td>
							<td data-title="Programming"><?php echo $Fps->bahasa; ?></td>
							<td data-title="DET"><?php echo $Fps->DET; ?></td>
							<td data-title="FTR"><?php echo $Fps->FTR; ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="mdl-card__actions mdl-card--border">
		<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/function/addFunction') ?>">
			Add Function
		</a>
	</div>
</div>