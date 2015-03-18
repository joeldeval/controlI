<?php
/* @var $this IncidentesController */
/* @var $model Incidentes */

$this->breadcrumbs=array(
	'Incidentes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Incidentes', 'url'=>array('index')),
	array('label'=>'Manage Incidentes', 'url'=>array('admin')),
);
?>

<h1>Create Incidentes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>