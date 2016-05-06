<?php
/* @var $this FpaTdiController */
/* @var $model FpaTdi */

$this->breadcrumbs=array(
	'Fpa Tdis'=>array('index'),
	$model->id_tdi,
);

$this->menu=array(
	array('label'=>'List FpaTdi', 'url'=>array('index')),
	array('label'=>'Create FpaTdi', 'url'=>array('create')),
	array('label'=>'Update FpaTdi', 'url'=>array('update', 'id'=>$model->id_tdi)),
	array('label'=>'Delete FpaTdi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tdi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FpaTdi', 'url'=>array('admin')),
);
?>

<h1>View FpaTdi #<?php echo $model->id_tdi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tdi',
		'id_gsc',
		'value',
		'id_fpa',
	),
)); ?>
