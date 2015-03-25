<?php
/* @var $this CtaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ctas',
);

$this->menu=array(
	array('label'=>'Create Cta', 'url'=>array('create')),
	array('label'=>'Manage Cta', 'url'=>array('admin')),
);
?>

<h1>Ctas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
