<?php
/* @var $this IncidentesController */
/* @var $model Incidentes */


$this->menu=array(

	array('label'=>'Listar Incidentes', 'url'=>array('index')),
	array('label'=>'Actualizar Incidente', 'url'=>array('update', 'id'=>$model->idIncidente)),
	array('label'=>'Cerrar Incidencia', 'url'=>array('cerrar', 'id'=>$model->idIncidente)),
	array('label'=>'Eliminar Incidente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idIncidente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Incidentes', 'url'=>array('admin')),

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
