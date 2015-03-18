<?php
/* @var $this IncidentesController */
/* @var $model Incidentes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'incidentes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InicioFechaHora'); ?>
		<?php echo $form->textField($model,'InicioFechaHora'); ?>
		<?php echo $form->error($model,'InicioFechaHora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Categoria'); ?>
		<?php echo $form->textField($model,'Categoria',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estatus'); ?>
		<?php echo $form->textField($model,'Estatus',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Estatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Laboratorio'); ?>
		<?php echo $form->textField($model,'Laboratorio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Laboratorio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Asignado'); ?>
		<?php echo $form->textField($model,'Asignado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Asignado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Urgencia'); ?>
		<?php echo $form->textField($model,'Urgencia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Urgencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SolucionFechaHora'); ?>
		<?php echo $form->textField($model,'SolucionFechaHora',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'SolucionFechaHora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ModificacionFechaHora'); ?>
		<?php echo $form->textField($model,'ModificacionFechaHora',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ModificacionFechaHora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Equipo'); ?>
		<?php echo $form->textField($model,'Equipo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Equipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Inmueble'); ?>
		<?php echo $form->textField($model,'Inmueble',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Inmueble'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->