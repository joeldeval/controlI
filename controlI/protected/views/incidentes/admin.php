<?php
/* @var $this IncidentesController */
/* @var $model Incidentes */

$this->menu=array(
	array('label'=>'Listar Incidentes', 'url'=>array('index')),
<<<<<<< HEAD
=======
	array('label'=>'Crear Incidentes', 'url'=>array('create')),
	array('label'=>'Actualizar Incidentes', 'url'=>array('update', 'id'=>$model->idIncidente)),
	array('label'=>'Eliminar Incidentes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idIncidente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Reporte de Incidentes', 'url'=>array('pdf')),
>>>>>>> f739eaa2b633b29d6c7d21feddc7adc1f96e8123
	
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

<?php echo CHtml::link('','#',array('class'=>'search-button')); ?>
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
<<<<<<< HEAD
		/*'Inmueble',*/
=======
		//'Inmueble',
>>>>>>> 522aa625fbc07241bc226d732e314acccfa8aa2c
		'Asignado',
		'Urgencia',
		'SolucionFechaHora',
		'ModificacionFechaHora',
		'Equipo',
		
		array(
			'class'=>'CButtonColumn',
		),
		//'htmlOptions'=>array('class'=>'table'),
	),
)); ?>
