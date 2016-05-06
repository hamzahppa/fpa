<?php
/* @var $this FpaTdiController */
/* @var $model FpaTdi */

$this->breadcrumbs=array(
	'Fpa Tdis'=>array('index'),
	$model->id_tdi=>array('view','id'=>$model->id_tdi),
	'Update',
);

$this->menu=array(
	array('label'=>'List FpaTdi', 'url'=>array('index')),
	array('label'=>'Create FpaTdi', 'url'=>array('create')),
	array('label'=>'View FpaTdi', 'url'=>array('view', 'id'=>$model->id_tdi)),
	array('label'=>'Manage FpaTdi', 'url'=>array('admin')),
);
?>

<h1>Update FpaTdi <?php echo $model->id_tdi; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>