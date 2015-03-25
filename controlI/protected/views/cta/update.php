<?php
/* @var $this CtaController */
/* @var $model Cta */

$this->breadcrumbs=array(
	'Cta'=>array('index'),
	$model->idCta=>array('view','id'=>$model->idCta),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->idCta)),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Actualizar Usuario Cta <?php echo $model->idCta; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>