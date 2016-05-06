<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text">Add Table</h2>
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
				<input class="mdl-textfield__input" type="text" id="nama" name="FpaFp[nama_fp]">
				<label class="mdl-textfield__label" for="nama">Table Name</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<input class="mdl-textfield__input" type="text" id="nama" name="FpaFp[bahasa]">
				<label class="mdl-textfield__label" for="nama">Programming</label>
			</div>
			<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
				<div class="mdl-card__title">
					<h4 class="mdl-card__title-text">Data Element Type (DET)</h4>
				</div>
				<div class="mdl-card__supporting-text" id="DET">
					Input Data Element Type(s) for this table
					<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
						<input class="mdl-textfield__input" type="text" id="DET0" name="DET[]">
						<label class="mdl-textfield__label" for="DET0">DET</label>
					</div>
				</div>
				<div class="mdl-card__actions mdl-card--border">
					<input type="button" value="Add Field" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" id="addDET" onClick="addInput('DET');">
				</div>
			</div>

			<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
				<div class="mdl-card__title">
					<h4 class="mdl-card__title-text">Record Element Type (RET)</h4>
				</div>
				<div class="mdl-card__supporting-text" id="RET">
					Input Record Element Type(s) for this table
					<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
						<input class="mdl-textfield__input" type="text" id="RET0" name="RET[]">
						<label class="mdl-textfield__label" for="RET0">RET</label>
					</div>
				</div>
				<div class="mdl-card__actions mdl-card--border">
					<input type="button" value="Add Field" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" id="addRET" onClick="addInput('RET');">
				</div>
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