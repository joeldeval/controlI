<?php
/* @var $this IncidentesController */
/* @var $model Incidentes */

$this->breadcrumbs=array(
	'Incidentes'=>array('index'),
	$model->idIncidente=>array('view','id'=>$model->idIncidente),
	'Update',
);

$this->menu=array(
	array('label'=>'List Incidentes', 'url'=>array('index')),
	array('label'=>'Create Incidentes', 'url'=>array('create')),
	array('label'=>'View Incidentes', 'url'=>array('view', 'id'=>$model->idIncidente)),
	array('label'=>'Manage Incidentes', 'url'=>array('admin')),
);
?>

<h1>Update Incidentes <?php echo $model->idIncidente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>