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

	<div class="row">
		<?php echo $form->label($model,'idIncidente'); ?>
		<?php echo $form->textField($model,'idIncidente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InicioFechaHora'); ?>
		<?php echo $form->textField($model,'InicioFechaHora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Categoria'); ?>
		<?php echo $form->textField($model,'Categoria',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Estatus'); ?>
		<?php echo $form->textField($model,'Estatus',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Laboratorio'); ?>
		<?php echo $form->textField($model,'Laboratorio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Asignado'); ?>
		<?php echo $form->textField($model,'Asignado',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Urgencia'); ?>
		<?php echo $form->textField($model,'Urgencia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SolucionFechaHora'); ?>
		<?php echo $form->textField($model,'SolucionFechaHora',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ModificacionFechaHora'); ?>
		<?php echo $form->textField($model,'ModificacionFechaHora',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Equipo'); ?>
		<?php echo $form->textField($model,'Equipo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Inmueble'); ?>
		<?php echo $form->textField($model,'Inmueble',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->