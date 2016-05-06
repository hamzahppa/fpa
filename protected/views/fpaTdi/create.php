<?php
/* @var $this FpaTdiController */
/* @var $model FpaTdi */

$this->breadcrumbs=array(
	'Fpa Tdis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FpaTdi', 'url'=>array('index')),
	array('label'=>'Manage FpaTdi', 'url'=>array('admin')),
);
?>

<h1>Create FpaTdi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>