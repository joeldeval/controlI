<?php
/* @var $this CtaController */
/* @var $model Cta */

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<div id="form-main">
  <div id="form-div">
<h1>Crear Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
