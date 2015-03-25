<?php
/* @var $this CtaController */
/* @var $model Cta */

$this->breadcrumbs=array(
	'Cta'=>array('index'),
	$model->idCta,
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->idCta)),
	array('label'=>'Eliminar un Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Vista del Usuario Cta #<?php echo $model->idCta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCta',
		'Password',
		'Nombre',
		'Jerarquia',
	),
)); ?>
