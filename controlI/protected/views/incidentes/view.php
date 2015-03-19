<?php
/* @var $this IncidentesController */
/* @var $model Incidentes */

$this->breadcrumbs=array(
	'Incidentes'=>array('index'),
	$model->idIncidente,
);

$this->menu=array(
	array('label'=>'List Incidentes', 'url'=>array('index')),
	array('label'=>'Create Incidentes', 'url'=>array('create')),
	array('label'=>'Update Incidentes', 'url'=>array('update', 'id'=>$model->idIncidente)),
	array('label'=>'Delete Incidentes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idIncidente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Incidentes', 'url'=>array('admin')),
);
?>

<h1>View Incidentes #<?php echo $model->idIncidente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idIncidente',
		'Descripcion',
		'InicioFechaHora',
		'Categoria',
		'Estatus',
		'Laboratorio',
		'Asignado',
		'Urgencia',
		'SolucionFechaHora',
		'ModificacionFechaHora',
		'Equipo',
		'Inmueble',
		array(
			'label'=>'Imagen',
			'type'=>'raw',
			'value'=>CHtml::image(Yii::app()->baseUrl.'/imagenes/fotos_reportes/'.$model->Categoria.'.png'),
		
			),
	),
)); ?>
