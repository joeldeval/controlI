<?php
/* @var $this CtaController */
/* @var $model Cta */


$this->menu=array(
	array('label'=>'Detalles Usuario', 'url'=>array('view', 'id'=>$model->idCta)),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>
<div id="form-main">
  <div id="form-div">
<h1>Actualizar Usuario <?php echo $model->idCta; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>