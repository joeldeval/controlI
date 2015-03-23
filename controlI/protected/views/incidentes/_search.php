<?php
/* @var $this IncidentesController */
/* @var $model Incidentes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>



	<div>
	
		<?php echo $form->label($model,'idIncidente'); ?>
		<?php echo $form->textField($model,'idIncidente',array('placeholder'=>'Introduzca el # de Incidente')); ?>
	</div>

	<div>

		<?php echo $form->label($model,'InicioFechaHora'); ?>
		<?php echo $form->textField($model,'InicioFechaHora',array('placeholder'=>'Cuando se creo incidente')); ?>
	</div>

	<div>

		<?php echo $form->label($model,'Categoria'); ?>
		<?php echo $form->textField($model,'Categoria',array('size'=>45,'maxlength'=>45,
		'placeholder'=>'Categoria del incidente')); ?>

	</div>

	<div>
		<?php echo $form->label($model,'Estatus'); ?>
		<?php echo $form->textField($model,'Estatus',array('size'=>45,'maxlength'=>45,
		'placeholder'=>'Estatus del Incidente')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'Laboratorio'); ?>
		<?php echo $form->textField($model,'Laboratorio',array('size'=>45,'maxlength'=>45,
		'placeholder'=>'Laboratorio donde esta el incidente')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'Asignado'); ?>
		<?php echo $form->textField($model,'Asignado',array('size'=>45,'maxlength'=>45,
		'placeholder'=>'Persona Asignada')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'Urgencia'); ?>
		<?php echo $form->textField($model,'Urgencia',array('size'=>45,'maxlength'=>45,
		'placeholder'=>'Nivel de Urgencia')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'SolucionFechaHora'); ?>
		<?php echo $form->textField($model,'SolucionFechaHora',array('size'=>45,'maxlength'=>45,
		'placeholder'=>'Fecha que cerro incidencia')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'ModificacionFechaHora'); ?>
		<?php echo $form->textField($model,'ModificacionFechaHora',array('size'=>45,'maxlength'=>45,
		'placeholder'=>'Ultima Modificacion')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'Equipo'); ?>
		<?php echo $form->dropDownList($model,'Categoria',array('equipo'=>'Equipo',
																'infraestructura'=>'Infraestructura'), 
		                                                       array('options' => array('equipo'=>array('selected'=>true))), 
		                                                       array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<!--
	<div class="row">
		<?php echo $form->label($model,'Inmueble'); ?>
		<?php echo $form->textField($model,'Inmueble',array('size'=>45,'maxlength'=>45)); ?>
	</div>
	-->

	<div class="buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->