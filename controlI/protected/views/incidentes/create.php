<?php
/* @var $this IncidentesController */
/* @var $model Incidentes */

$this->breadcrumbs=array(
	'Incidentes'=>array('index'),
	'Create',
);

?>

<h1>Create Incidentes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
