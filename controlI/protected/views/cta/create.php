<?php
/* @var $this CtaController */
/* @var $model Cta */

$this->breadcrumbs=array(
	'Ctas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cta', 'url'=>array('index')),
	array('label'=>'Manage Cta', 'url'=>array('admin')),
);
?>

<h1>Create Cta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>