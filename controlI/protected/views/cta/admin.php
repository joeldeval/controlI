<?php
/* @var $this CtaController */
/* @var $model Cta */

<<<<<<< HEAD
$this->menu=array(
	array('label'=>'Usuarios CTA', 'url'=>array('index')),
=======
$this->breadcrumbs=array(
	'Cta'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
>>>>>>> 39ecd1651a763f6a242cc89bbd32e22ec3ed66d8
	array('label'=>'Crear Usuario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<<<<<<< HEAD
=======
<h1>Administrar Usuarios Cta</h1>
>>>>>>> 39ecd1651a763f6a242cc89bbd32e22ec3ed66d8

<h1>Administrar Usuarios</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<div class="table-responsive">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cta-grid',
	'itemsCssClass'=>'table table-striped table-hover table-condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idCta',
		'Password',
		'Nombre',
		'Jerarquia',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
