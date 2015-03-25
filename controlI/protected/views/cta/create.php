<?php
/* @var $this CtaController */
/* @var $model Cta */

<<<<<<< HEAD
=======
$this->breadcrumbs=array(
	'Cta'=>array('index'),
	'Crear',
);
>>>>>>> 39ecd1651a763f6a242cc89bbd32e22ec3ed66d8

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>
<<<<<<< HEAD
<div id="form-main">
  <div id="form-div">
<h1>Crear Usuario</h1>
=======

<h1>Crear Usuario Cta</h1>
>>>>>>> 39ecd1651a763f6a242cc89bbd32e22ec3ed66d8

<?php $this->renderPartial('_form', array('model'=>$model)); ?>