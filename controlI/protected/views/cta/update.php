<?php
/* @var $this CtaController */
/* @var $model Cta */

$this->breadcrumbs=array(
	'Ctas'=>array('index'),
	$model->idCta=>array('view','id'=>$model->idCta),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cta', 'url'=>array('index')),
	array('label'=>'Create Cta', 'url'=>array('create')),
	array('label'=>'View Cta', 'url'=>array('view', 'id'=>$model->idCta)),
	array('label'=>'Manage Cta', 'url'=>array('admin')),
);
?>

<h1>Update Cta <?php echo $model->idCta; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>