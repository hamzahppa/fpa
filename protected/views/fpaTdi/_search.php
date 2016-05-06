<?php
/* @var $this FpaTdiController */
/* @var $model FpaTdi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tdi'); ?>
		<?php echo $form->textField($model,'id_tdi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_gsc'); ?>
		<?php echo $form->textField($model,'id_gsc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'value'); ?>
		<?php echo $form->textField($model,'value'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_fpa'); ?>
		<?php echo $form->textField($model,'id_fpa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->