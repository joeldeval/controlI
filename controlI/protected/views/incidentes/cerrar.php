<?php
/* @var $this IncidentesController */
/* @var $model Incidentes */

$this->breadcrumbs=array(
	'Incidentes'=>array('index'),
	$model->idIncidente=>array('view','id'=>$model->idIncidente),'Cerrar',
);

$this->menu=array(
	array('label'=>'List Incidentes', 'url'=>array('index')),
	array('label'=>'Create Incidentes', 'url'=>array('create')),
	array('label'=>'View Incidentes', 'url'=>array('view', 'id'=>$model->idIncidente)),
	array('label'=>'Manage Incidentes', 'url'=>array('admin')),
	array('label'=>'Reporte de Incidentes', 'url'=>array('pdf')),
);
?>

<h1>Cerrar Incidente <?php echo $model->idIncidente; ?></h1>

<?php $this->renderPartial('_form3', array('model'=>$model)); ?>