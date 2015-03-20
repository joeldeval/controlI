<?php
/* @var $this IncidentesController */
/* @var $model Incidentes */


$this->menu=array(

	array('label'=>'Listar Incidentes', 'url'=>array('index')),
	array('label'=>'Actualizar Incidente', 'url'=>array('update', 'id'=>$model->idIncidente)),
	array('label'=>'Eliminar Incidente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idIncidente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Incidentes', 'url'=>array('admin')),
<<<<<<< HEAD
=======
	array('label'=>'List Incidentes', 'url'=>array('index')),
	array('label'=>'Create Incidentes', 'url'=>array('create')),
	array('label'=>'Update Incidentes', 'url'=>array('update', 'id'=>$model->idIncidente)),
	array('label'=>'Delete Incidentes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idIncidente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Cerrar Incidente', 'url'=>array('cerrar', 'id'=>$model->idIncidente)),
	array('label'=>'Manage Incidentes', 'url'=>array('admin')),
	array('label'=>'Reporte de Incidentes', 'url'=>array('pdf')),
<<<<<<< HEAD

=======
>>>>>>> f739eaa2b633b29d6c7d21feddc7adc1f96e8123
>>>>>>> 522aa625fbc07241bc226d732e314acccfa8aa2c
=======
	array('label'=>'Reporte de Incidentes', 'url'=>array('pdf')),

>>>>>>> 4063fd9cc20d28384615fd8124788f7138a19d3f
);
?>

<h1>Detalles de Incidente #<?php echo $model->idIncidente; ?></h1>

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
		array(
			'label'=>'Imagen',
			'type'=>'raw',
			'value'=>CHtml::image(Yii::app()->baseUrl.'/imagenes/fotos_reportes/'.$model->Categoria.'.png'),
		
			),
	),
)); ?>
