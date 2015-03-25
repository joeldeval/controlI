<?php
/* @var $this CtaController */
/* @var $model Cta */

$this->breadcrumbs=array(
	'Cta'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Crear Usuario Cta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>