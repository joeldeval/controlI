<?php
/* @var $this IncidentesController */
/* @var $model Incidentes */

$this->menu=array(
	array('label'=>'Listar Incidentes', 'url'=>array('index')),
	array('label'=>'Crear Incidente', 'url'=>array('create')),
	array('label'=>'Reporte de Incidentes', 'url'=>array('reportes')),
	array('label'=>'Usuarios de CTA', 'url'=> Yii::app()->homeUrl.'/cta/admin'),

	
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
</div>

<!-- search-form -->
<div class="table-responsive">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'incidentes-grid',
	'itemsCssClass'=>'table table-striped table-hover',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idIncidente',
		'Descripcion',
		'InicioFechaHora',
		'Categoria',
		'Estatus',
		'Laboratorio',
		/*'Inmueble',*/
		//'Inmueble',
		'Asignado',
		'Urgencia',
		'SolucionFechaHora',
		'ModificacionFechaHora',
		'Equipo',
		

		/*
		array(
			'class'=>'CButtonColumn',
		),
		*/

		array(          
			'class'=>'CButtonColumn',                  
			'template' => '{view} {update} {delete} {cerrar}',              
			'buttons'=>array(                      
				'cerrar' => array(                              
				'label'=>'Cerrar Incidente','url'=>"CHtml::normalizeUrl(array('cerrar', 'id'=>\$data->idIncidente ))",                
				'imageUrl'=>Yii::app()->request->baseUrl.'/imagenes/cerrar.png',                               
				'options' => array('class'=>'cerrar'),                     
				 ),              
			),      
		),
 

		//'htmlOptions'=>array('class'=>'table'),
	),
)); ?>
