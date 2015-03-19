<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuarios')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idUsuarios), array('view', 'id'=>$data->idUsuarios)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Codigo')); ?>:</b>
	<?php echo CHtml::encode($data->Codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Carrera')); ?>:</b>
	<?php echo CHtml::encode($data->Carrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Campus')); ?>:</b>
	<?php echo CHtml::encode($data->Campus); ?>
	<br />


</div>