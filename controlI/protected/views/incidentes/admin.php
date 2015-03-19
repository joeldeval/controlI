<?php
/* @var $this IncidentesController */
/* @var $model Incidentes */

$this->breadcrumbs=array(
	'Incidentes'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Incidentes', 'url'=>array('index')),
	array('label'=>'Crear Incidentes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#incidentes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Incidentes</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<div class="table-responsive">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'incidentes-grid',
	'itemsCssClass'=>'table table-striped table-hover table-condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idIncidente',
		'Descripcion',
		'InicioFechaHora',
		'Categoria',
		'Estatus',
		'Laboratorio',
		/*
		'Asignado',
		'Urgencia',
		'SolucionFechaHora',
		'ModificacionFechaHora',
		'Equipo',
		'Inmueble',
		*/
		array(
			'class'=>'CButtonColumn',
		),
		//'htmlOptions'=>array('class'=>'table'),
	),
)); ?>
