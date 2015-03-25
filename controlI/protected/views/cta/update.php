<?php
/* @var $this CtaController */
/* @var $model Cta */

<<<<<<< HEAD

$this->menu=array(
	array('label'=>'Detalles Usuario', 'url'=>array('view', 'id'=>$model->idCta)),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>
<div id="form-main">
  <div id="form-div">
<h1>Actualizar Usuario <?php echo $model->idCta; ?></h1>
=======
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
>>>>>>> 39ecd1651a763f6a242cc89bbd32e22ec3ed66d8

<?php $this->renderPartial('_form', array('model'=>$model)); ?>