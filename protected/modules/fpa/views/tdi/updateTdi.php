<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text"><?php echo $modelGsc->gsc; ?></h2>
	</div>

	<div class="mdl-card__supporting-text">
	<?php echo $modelGsc->deskripsi; ?>
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
					<?php echo $i; ?> | <?php echo $Gscpoint->point; ?>
				</span>
				<span class="mdl-list__item-secondary-action">
					<label class="fpa-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-<?php echo $i ?>">
						<input type="radio" id="list-option-<?php echo $i ?>" class="mdl-radio__button" name="FpaTdi[value]" value="<?php echo $i; ?>" 
						<?php if ($modelTdi->value == $i): ?>
							checked
						<?php endif; $i++; ?>
						/>
					</label>
				</span>
			</li>
		<?php endforeach ?>
		</ul>
	</div>
	<div class="mdl-card__actions mdl-card--border">
	<?php if ($modelGsc->id_gsc>1): ?>
		<?php if ($stat == "noedit"): ?>
			<a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/tdi/addTdi', array('id_gsc'=>$modelGsc->id_gsc-1)); ?>">
				Previous
			</a>
		<?php endif ?>
	<?php endif; ?>
	<?php if ($modelGsc->id_gsc < 14): ?>
		<?php if ($stat == "edit"): ?>
			<button type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Save</button>
		<?php endif ?>
		<?php if ($stat == "noedit"): ?>
			<button type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Next</button>
		<?php endif ?>
	<?php endif ?>
	<?php if ($modelGsc->id_gsc == 14): ?>
		<button type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Save</button>
	<?php endif ?>
	</div>
	<?php $this->endWidget(); ?>
</div>