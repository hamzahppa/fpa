<?php
/* @var $this FpaTdiController */
/* @var $data FpaTdi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tdi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tdi), array('view', 'id'=>$data->id_tdi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_gsc')); ?>:</b>
	<?php echo CHtml::encode($data->id_gsc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_fpa')); ?>:</b>
	<?php echo CHtml::encode($data->id_fpa); ?>
	<br />


</div>