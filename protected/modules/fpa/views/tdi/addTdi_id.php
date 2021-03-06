<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text"><?php echo $modelGsc->gsc_id; ?></h2>
	</div>

	<div class="mdl-card__supporting-text">
	<?php echo $modelGsc->deskripsi_id; ?>
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'tdi-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// See class documentation of CActiveForm for details on this,
		// you need to use the performAjaxValidation()-method described there.
		'enableAjaxValidation'=>false,
		)); ?>
		<ul class="mdl-list">
		<?php $i=0; foreach ($modelGsc->fpaGscpoints as $Gscpoint): ?>
			<li class="mdl-list__item">
				<span class="mdl-list__item-primary-content">
					<?php echo $i; ?> | <?php echo $Gscpoint->point_id; ?>
				</span>
				<span class="mdl-list__item-secondary-action">
					<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-<?php echo $i ?>">
						<input type="radio" id="list-option-<?php echo $i ?>" class="mdl-radio__button" name="FpaTdi[value]" value="<?php echo $i++; ?>" />
					</label>
				</span>
			</li>
		<?php endforeach ?>
		</ul>
	</div>
	<div class="mdl-card__actions mdl-card--border">
	<?php if ($modelGsc->id_gsc>1): ?>
		<a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/tdi/addTdi', array('id_gsc'=>$modelGsc->id_gsc-1)); ?>">
			Sebelumnya
		</a>
	<?php endif; ?>
	<?php if ($modelGsc->id_gsc < 14): ?>
		<button type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Selanjutnya</button>
	<?php endif ?>
	<?php if ($modelGsc->id_gsc == 14): ?>
		<button type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Simpan</button>
	<?php endif ?>
	</div>
	<?php $this->endWidget(); ?>
</div>