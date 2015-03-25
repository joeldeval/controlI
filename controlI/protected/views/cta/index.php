<?php
/* @var $this CtaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cta',
);

$this->menu=array(
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Cta</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
