<?php
/* @var $this IncidentesController */
/* @var $model Incidentes */

$this->breadcrumbs=array(
	'Incidentes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Incidentes', 'url'=>array('index')),
	array('label'=>'Administrar Incidentes', 'url'=>array('admin')),
	array('label'=>'Reporte de Incidentes', 'url'=>array('pdf')),
);
?>


<h1>Create Incidentes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
