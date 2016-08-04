<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text">Tabel dalam aplikasi</h2>
	</div>
	<div class="fpa-supporting-text mdl-card__supporting-text">
		<?php if ($modelTable == null): ?>
			Belum ada data tabel dalam aplikasi. Tambahkan data tabel melalui tombol <b>Tambah Tabel</b>. Tambahkan tabel untuk menyelesaikan perhitungan. Anda dapat menambahkan lebih dari satu tabel sesuai dengan kebutuhan aplikasi yang anda perkirakan.
		<?php else: ?>
			Tambahkan tabel untuk melengkapi proses perkiraan. Anda dapat menambahkan lebih dari satu tabel sesuai dengan kebutuhan aplikasi yang anda perkirakan.
			<div class="fpa-supporting-text mdl-card__supporting-text">
			    <div class="table-responsive-vertical shadow-z-1">
					<!-- Table starts here -->
					<table id="table" class="table table-hover table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Table</th>
								<th>Jenis Tabel</th>
								<th>Bahasa Pemrograman</th>
								<th>DET</th>
								<th>RET</th>
								<th>UBAH</th>
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
								<td data-title="DET"><a href="<?php echo Yii::app()->createUrl('fpa/function/editFunction', array('id_fp'=>$Tables->id_fp)) ?>" style="text-decoration:none;">UBAH</a></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
			    </div>
			</div>
		<?php endif ?>
	</div>
	<div class="mdl-card__actions mdl-card--border">
		<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/function/addTable') ?>">
			Tambah Tabel
		</a>
	</div>
</div>

<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text">Fungsional dalam aplikasi</h2>
	</div>
	<div class="fpa-supporting-text mdl-card__supporting-text">
	<?php if ($modelFunction == null): ?>
		Belum ada data fungsional dalam aplikasi. Tambahkan data fungsional melalui tombol <b>Tambah Fungsional</b>. Tambahkan fungsional untuk menyelesaikan perhitungan. Anda dapat menambahkan lebih dari satu fungsional sesuai dengan kebutuhan aplikasi yang anda perkirakan.
	<?php else: ?>
		Tambahkan fungsional untuk melengkapi proses perkiraan. Anda dapat menambahkan lebih dari satu fungsional sesuai dengan kebutuhan aplikasi yang anda perkirakan.
			<div class="fpa-supporting-text mdl-card__supporting-text">
				<div class="table-responsive-vertical shadow-z-1">
					<!-- Table starts here -->
					<table id="table" class="table table-hover table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Function</th>
								<th>Jenus</th>
								<th>Bahasa Pemrograman</th>
								<th>DET</th>
								<th>FTR</th>
								<th>UBAH</th>
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
								<td data-title="EDIT"><a href="<?php echo Yii::app()->createUrl('fpa/function/editFunction', array('id_fp'=>$Fps->id_fp)) ?>" style="text-decoration:none;">UBAH</a></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
	<?php endif ?>
	</div>
	<div class="mdl-card__actions mdl-card--border">
		<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/function/addFunction') ?>">
			Tambah Fungsional
		</a>
	</div>
</div>