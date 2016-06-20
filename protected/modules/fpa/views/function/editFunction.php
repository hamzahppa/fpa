<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text">Edit Function</h2>
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
				<input class="mdl-textfield__input" type="text" id="nama" name="FpaFp[nama_fp]" value="<?php echo $modelFp->nama_fp; ?>">
				<label class="mdl-textfield__label" for="nama">Function Name</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<select class="mdl-textfield__input" id="type" name="FpaFp[tipe]">
					<option value="EI" <?php if ($modelFp->tipe == "EI") {
						echo "selected";
					} ?>>External Input</option>
					<option value="EO" <?php if ($modelFp->tipe == "EO") {
						echo "selected";
					} ?>>External Output</option>
					<option value="EQ" <?php if ($modelFp->tipe == "EQ") {
						echo "selected";
					} ?>>External Inquiries</option>
				</select>
				<label class="mdl-textfield__label" for="type">Function Type</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<select class="mdl-textfield__input" id="programming" name="FpaFp[bahasa]">
					<option value="PHP" <?php if ($modelFp->bahasa == "PHP") {
						echo "selected";
					} ?>>PHP</option>
					<option value="HTML" <?php if ($modelFp->bahasa == "HTML") {
						echo "selected";
					} ?>>HTML</option>
					<option value="Javascript" <?php if ($modelFp->bahasa == "JS") {
						echo "selected";
					} ?>>Javascript</option>
				</select>
				<label class="mdl-textfield__label" for="programming">Programming Language</label>
			</div>

			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<input class="mdl-textfield__input" type="number" id="DET" name="FpaFp[DET]" min="0" value="<?php echo $modelFp->DET; ?>">
				<label class="mdl-textfield__label" for="DET">Field and Button</label>
			</div>

			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<input class="mdl-textfield__input" type="number" id="FTR" name="FpaFp[FTR]" min="0" value="<?php echo $modelFp->FTR; ?>">
				<label class="mdl-textfield__label" for="FTR">Table</label>
			</div>

<!-- 			<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
				<div class="mdl-card__title">
					<h4 class="mdl-card__title-text">Data Element Type (DET)</h4>
				</div>
				<div class="mdl-card__supporting-text" id="DET">
					Input Data Element Type(s) for this function
					<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
						<input class="mdl-textfield__input" type="text" id="DET0" name="DET[]">
						<label class="mdl-textfield__label" for="DET0">DET</label>
					</div>
				</div>
				<div class="mdl-card__actions mdl-card--border">
					<input type="button" value="Add Field" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" id="addDET" onClick="addInput('DET');">
				</div>
			</div> -->

<!-- 			<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
				<div class="mdl-card__title">
					<h4 class="mdl-card__title-text">File Type Reference (FTR)</h4>
				</div>
				<div class="mdl-card__supporting-text" id="FTR">
					Input File Type Reference(s) for this function
					<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
						<input class="mdl-textfield__input" type="text" id="FTR0" name="FTR[]">
						<label class="mdl-textfield__label" for="FTR0">FTR</label>
					</div>
				</div>
				<div class="mdl-card__actions mdl-card--border">
					<input type="button" value="Add Field" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" id="addFTR" onClick="addInput('FTR');">
				</div>
			</div> -->
	</div>
	<div class="mdl-card__actions mdl-card--border">
		<button type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Save Function</button>
		<a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/function'); ?>">
			Cancel
		</a>
	</div>
	<?php $this->endWidget(); ?>
</div>