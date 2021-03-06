<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text">Edit Table</h2>
	</div>
	<div class="fpa-supporting-text mdl-card__supporting-text">
		Add table and data field
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'fp-form',
			// Please note: When you enable ajax validation, make sure the corresponding
			// controller action is handling ajax validation correctly.
			// See class documentation of CActiveForm for details on this,
			// you need to use the performAjaxValidation()-method described there.
			'enableAjaxValidation'=>true,
		)); ?>
			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<label class="fpa-label" for="nama">Table Name</label>
				<input class="mdl-textfield__input" type="text" id="nama" name="FpaFp[nama_fp]" value="<?php echo $modelFp->nama_fp; ?>">
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<label class="fpa-label" for="tipe">Table Type</label>
				<select class="mdl-textfield__input" id="tipe" name="FpaFp[tipe]">
					<option value=""></option>
					<option value="ILF" <?php if ($modelFp->tipe == "ILF") {
						echo "selected";
					} ?>>Internal Logical Files - Table maintain by System</option>
					<option value="EIF" <?php if ($modelFp->tipe == "EIF") {
						echo "selected";
					} ?>>External Interface File - Table maintain by External System</option>
				</select>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<label class="fpa-label" for="DET">Column</label>
				<input class="mdl-textfield__input" type="number" id="DET" name="FpaFp[DET]" min="0" value="<?php echo $modelFp->DET; ?>">
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<label class="fpa-label" for="RET">Relation</label>
				<input class="mdl-textfield__input" type="number" id="RET" name="FpaFp[RET]" min="0" value="<?php echo $modelFp->RET-1; ?>">
			</div>
	</div>
	<div class="mdl-card__actions mdl-card--border">
		<button type="" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Save Table</button>
		<a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/function'); ?>">
			Cancel
		</a>
	</div>
	<?php $this->endWidget(); ?>
</div>