<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--8-col">
	<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
		<h2 class="mdl-card__title-text"><?php echo $code; ?></h2>
	</div>
	<div class="mdl-card__supporting-text">
	    <h4>Sorry, we run on a problem</h4>
	    <p>You can contact us and tell the Error Code and/or Error Message below </br><i><b><?php echo $code; ?>, <?php echo CHtml::encode($message); ?></b></i></p>
	</div>
	<div class="mdl-card__actions mdl-card--border">
		<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->homeUrl; ?>">
			Go to main page
		</a>
	</div>
</div>