<?php
/* @var $this CtaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
<<<<<<< HEAD
	'Usuarios',
);

$this->menu=array(
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>
<div id="form-main">
  <div id="form-div">
<h1>Usuarios de CTA</h1>
=======
	'Cta',
);

$this->menu=array(
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Cta</h1>
>>>>>>> 39ecd1651a763f6a242cc89bbd32e22ec3ed66d8

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
