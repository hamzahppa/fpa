<?php  ?>
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
	<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
		<h2 class="mdl-card__title-text">Login</h2>
	</div>
	<div class="mdl-card__supporting-text">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		// 'enableClientValidation'=>true, -> penyebab error jquery
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>
	<div class="mdl-textfield mdl-js-textfield dl-cell mdl-cell--12-col">
		<?php echo $form->labelEx($model,'Email/Username', array('class'=>'fpa-label')); ?>
		<?php echo $form->textField($model,'username', array('class'=>'mdl-textfield__input')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
		<?php echo $form->labelEx($model,'Password', array('class'=>'fpa-label')); ?>
		<?php echo $form->passwordField($model,'password', array('class'=>'mdl-textfield__input')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	</div>
	<div class="mdl-card__actions mdl-card--border">
		<button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" type="submit">Login</button>
		<a href="<?php echo Yii::app()->createUrl('login/register') ?>" class="mdl-button mdl-js-button mdl-js-ripple-effect">Register</a>
	</div>
	<?php $this->endWidget(); ?>
</div>