<?php
/* @var $this CtaController */
/* @var $model Cta */


$this->menu=array(
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->idCta)),
	array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>
<div id="form-main">
  <div id="form-div">
<h1>Detalles de Usuario #<?php echo $model->idCta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCta',
		'Password',
		'Nombre',
		'Jerarquia',
	),
)); ?>
