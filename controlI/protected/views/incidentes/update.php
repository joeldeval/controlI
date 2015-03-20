<?php
/* @var $this IncidentesController */
/* @var $model Incidentes */


$this->menu=array(
<<<<<<< HEAD
	array('label'=>'Regresar', 'url'=>array('view', 'id'=>$model->idIncidente)),
	
=======
	array('label'=>'List Incidentes', 'url'=>array('index')),
	array('label'=>'Create Incidentes', 'url'=>array('create')),
	array('label'=>'View Incidentes', 'url'=>array('view', 'id'=>$model->idIncidente)),
	array('label'=>'Manage Incidentes', 'url'=>array('admin')),
	array('label'=>'Reporte de Incidentes', 'url'=>array('pdf')),
>>>>>>> f739eaa2b633b29d6c7d21feddc7adc1f96e8123
);
?>

<h1>Actualizar Incidente <?php echo $model->idIncidente; ?></h1>

<?php $this->renderPartial('_form2', array('model'=>$model)); ?>