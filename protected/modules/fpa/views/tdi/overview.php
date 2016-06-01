<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text">Overview of GSC's</h2>
	</div>

	<!-- Project GSC -->
	<div class="mdl-card__supporting-text">
		<ul class="fpa-list-three mdl-list">
		<?php $i=0; foreach ($modelTdi as $Tdis): ?>
			<li class="fpa-list mdl-list__item mdl-list__item--three-line">
				<span class="mdl-list__item-primary-content">
					<i class="fpa-icon material-icons mdl-list__item-avatar" style="border-radius: 10%;">data_usage</i>
					<span><?php echo $Tdis->idGsc->gsc ?></span>
					<span class="mdl-list__item-text-body">
						<?php 
							$i++;
							$modelGscPoint = $this->getGscPoint($Tdis->id_gsc, $Tdis->value);
							if ($modelGscPoint === null) {
								echo "Not Set";
							}else {
								echo $modelGscPoint->point;
							}
						?>
					</span>
				</span>
			</li>
		<?php endforeach ?>
		</ul>
	</div>

	<!-- Action -->
	<div class="mdl-card__actions mdl-card--border">
		<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/function') ?>">
			Continue
		</a>
		<a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/tdi/addTdi', array('id_gsc'=>1)); ?>">
			Edit
		</a>
	</div>
</div>