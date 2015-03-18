<?php
/* @var $this IncidentesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Incidentes',
);

$this->menu=array(
	array('label'=>'Create Incidentes', 'url'=>array('create')),
	array('label'=>'Manage Incidentes', 'url'=>array('admin')),
);
?>

<h1>Incidentes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
