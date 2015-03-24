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
<div id="form-main">
  <div id="form-div">
<div class="login">

		<?php echo $form->label($model,'idIncidente'); ?>
		<?php echo $form->textField($model,'idIncidente',array('placeholder'=>'Introduzca el # de Incidente')); ?>


		<?php echo $form->label($model,'Categoria'); ?>
		<?php echo $form->textField($model,'Categoria',array('size'=>45,'maxlength'=>45,
		'placeholder'=>'Categoria del incidente')); ?>

		<?php echo $form->label($model,'Estatus'); ?>
		<?php echo $form->textField($model,'Estatus',array('size'=>45,'maxlength'=>45,
		'placeholder'=>'Estatus del Incidente')); ?>

		<?php echo $form->label($model,'Laboratorio'); ?>
		<?php echo $form->textField($model,'Laboratorio',array('size'=>45,'maxlength'=>45,
		'placeholder'=>'Laboratorio donde esta el incidente')); ?>

		<?php echo $form->label($model,'Asignado'); ?>
		<?php echo $form->textField($model,'Asignado',array('size'=>45,'maxlength'=>45,
		'placeholder'=>'Persona Asignada')); ?>
	
		<?php echo $form->label($model,'Urgencia'); ?>
		<?php echo $form->textField($model,'Urgencia',array('size'=>45,'maxlength'=>45,
		'placeholder'=>'Nivel de Urgencia')); ?>
	</div>
</div>
</div>
	<div class="buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->