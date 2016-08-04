<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text">Add Function</h2>
	</div>
	<div class="fpa-supporting-text mdl-card__supporting-text">
	Add application function
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'fp-form',
			// Please note: When you enable ajax validation, make sure the corresponding
			// controller action is handling ajax validation correctly.
			// See class documentation of CActiveForm for details on this,
			// you need to use the performAjaxValidation()-method described there.
			'enableAjaxValidation'=>true,
		)); ?>
			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<label class="fpa-label" for="nama">Function Name</label>
				<input class="mdl-textfield__input" type="text" id="nama" name="FpaFp[nama_fp]">
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<label class="fpa-label" for="type">Function Type</label>
				<select class="mdl-textfield__input" id="type" name="FpaFp[tipe]">
					<option value=""></option>
					<option value="EI">External Input - Input from user to change Table (ILF)</option>
					<option value="EO">External Output - Output from System</option>
					<option value="EQ">External Inquiries - Input from user that change output</option>
				</select>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<label class="fpa-label" for="programming">Programming Language</label>
				<select class="mdl-textfield__input" id="programming" name="FpaFp[bahasa]">
					<option value=""></option>
					<option value="PHP">PHP</option>
					<option value="HTML">HTML</option>
					<option value="Javascript">Javascript</option>
				</select>
			</div>

			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<label class="fpa-label" for="DET">Field and Button</label>
				<input class="mdl-textfield__input" type="number" id="DET" name="FpaFp[DET]" min="0">
			</div>

			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<label class="fpa-label" for="FTR">Table</label>
				<input class="mdl-textfield__input" type="number" id="FTR" name="FpaFp[FTR]" min="0">
			</div>
	</div>
	<div class="mdl-card__actions mdl-card--border">
		<button type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Save Function</button>
		<a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/function'); ?>">
			Cancel
		</a>
	</div>
	<?php $this->endWidget(); ?>
</div>