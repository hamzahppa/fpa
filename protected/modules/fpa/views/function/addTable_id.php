<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text">Tambah Tabel</h2>
	</div>
	<div class="fpa-supporting-text mdl-card__supporting-text">
		Tambahkan data tabel yang digunakan aplikasi
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'fp-form',
			// Please note: When you enable ajax validation, make sure the corresponding
			// controller action is handling ajax validation correctly.
			// See class documentation of CActiveForm for details on this,
			// you need to use the performAjaxValidation()-method described there.
			'enableAjaxValidation'=>true,
		)); ?>
			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<label class="fpa-label" for="nama">Nama Tabel</label>
				<input class="mdl-textfield__input" type="text" id="nama" name="FpaFp[nama_fp]">
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<label class="fpa-label" for="tipe">Jenis Tabel</label>
				<select class="mdl-textfield__input" id="tipe" name="FpaFp[tipe]">
					<option value=""></option>
					<option value="ILF">Internal Logical Files - Tabel yang dikelola sistem</option>
					<option value="EIF">External Interface File - Tabel yang dikelola oleh sistem lain</option>
				</select>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<label class="fpa-label" for="DET">Kolom Tabel</label>
				<input class="mdl-textfield__input" type="number" id="DET" name="FpaFp[DET]" min="0">
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<label class="fpa-label" for="RET">Relasi Tabel</label>
				<input class="mdl-textfield__input" type="number" id="RET" name="FpaFp[RET]" min="0">
			</div>
	</div>
	<div class="mdl-card__actions mdl-card--border">
		<button type="" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Simpan Tabel</button>
		<a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/function'); ?>">
			Batal
		</a>
	</div>
	<?php $this->endWidget(); ?>
</div>