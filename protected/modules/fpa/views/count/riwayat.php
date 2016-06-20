<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text">History</h2>
	</div>
	<div class="fpa-supporting-text mdl-card__supporting-text">
	Change(s) you made
		<div class="fpa-supporting-text mdl-card__supporting-text">
			<div class="table-responsive-vertical shadow-z-1">
				<!-- Table starts here -->
				<table id="table" class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Date Modified</th>
							<th>TCA</th>
							<th>FP</th>
							<th>LOC</th>
						</tr>
					</thead>
					<tbody>
					<?php $i=1; foreach ($modelRiwayat as $riwayat): ?>
						<tr>
							<td data-title="No"><?php echo $i++; ?></td>
							<td data-title="Date"><?php echo $riwayat->update_date; ?></td>
							<td data-title="TCA"><?php echo $riwayat->tca; ?></td>
							<td data-title="FP"><?php echo $riwayat->fp; ?></td>
							<td data-title="LOC"><?php echo $riwayat->loc; ?></td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="mdl-card__actions mdl-card--border">
			<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/count/index') ?>">
				Done
			</a>
		</div>
	</div>
</div>