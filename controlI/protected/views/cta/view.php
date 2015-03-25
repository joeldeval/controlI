<?php
/* @var $this CtaController */
/* @var $model Cta */

$this->breadcrumbs=array(
	'Ctas'=>array('index'),
	$model->idCta,
);

$this->menu=array(
	array('label'=>'List Cta', 'url'=>array('index')),
	array('label'=>'Create Cta', 'url'=>array('create')),
	array('label'=>'Update Cta', 'url'=>array('update', 'id'=>$model->idCta)),
	array('label'=>'Delete Cta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cta', 'url'=>array('admin')),
);
?>

<h1>View Cta #<?php echo $model->idCta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCta',
		'Password',
		'Nombre',
		'Jerarquia',
	),
)); ?>
