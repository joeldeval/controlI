<?php
/* @var $this IncidentesController */
/* @var $data Incidentes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idIncidente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idIncidente), array('view', 'id'=>$data->idIncidente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InicioFechaHora')); ?>:</b>
	<?php echo CHtml::encode($data->InicioFechaHora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Categoria')); ?>:</b>
	<?php echo CHtml::encode($data->Categoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estatus')); ?>:</b>
	<?php echo CHtml::encode($data->Estatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Laboratorio')); ?>:</b>
	<?php echo CHtml::encode($data->Laboratorio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Asignado')); ?>:</b>
	<?php echo CHtml::encode($data->Asignado); ?>
	<br />
	
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Urgencia')); ?>:</b>
	<?php echo CHtml::encode($data->Urgencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SolucionFechaHora')); ?>:</b>
	<?php echo CHtml::encode($data->SolucionFechaHora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ModificacionFechaHora')); ?>:</b>
	<?php echo CHtml::encode($data->ModificacionFechaHora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Equipo')); ?>:</b>
	<?php echo CHtml::encode($data->Equipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Inmueble')); ?>:</b>
	<?php echo CHtml::encode($data->Inmueble); ?>
	<br />

	*/ ?>

</div>