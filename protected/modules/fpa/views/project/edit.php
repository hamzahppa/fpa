<?php  ?>
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text">Edit Project</h2>
	</div>
	<div class="mdl-card__supporting-text">
		Input the required data to create a project
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'fpa-form',
			// Please note: When you enable ajax validation, make sure the corresponding
			// controller action is handling ajax validation correctly.
			// See class documentation of CActiveForm for details on this,
			// you need to use the performAjaxValidation()-method described there.
			'enableAjaxValidation'=>true,
			)); ?>
			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<input class="mdl-textfield__input" type="text" id="nama" name="FpaFpa[nama_fpa]" value="<?php echo $model->nama_fpa; ?>" >
				<label class="mdl-textfield__label" for="nama">Project Name</label>
				<?php echo $form->error($model, 'nama_fpa'); ?>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
				<textarea class="mdl-textfield__input" type="text" rows="2" id="deskripsi" name="FpaFpa[deskripsi]" ><?php echo $model->deskripsi; ?></textarea>
				<label class="mdl-textfield__label" for="deskripsi">Project Description</label>
				<?php echo $form->error($model, 'deskripsi'); ?>
			</div>
	</div>
	<div class="mdl-card__actions mdl-card--border">
		<button type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Save Project</button>
	</div>
		<?php $this->endWidget(); ?>
</div>