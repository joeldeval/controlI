<?php
/* @var $this IncidentesController */
/* @var $model Incidentes */


$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('view', 'id'=>$model->idIncidente)),
	

);
?>
<div id="form-main">
  <div id="form-div">
<h1>Actualizar Incidente <?php echo $model->idIncidente; ?></h1>

<?php $this->renderPartial('_form2', array('model'=>$model)); ?>