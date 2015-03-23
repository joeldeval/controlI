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
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<?php echo $form->errorSummary($model,null,null,array("class"=>"alert alert-error")); ?>
<div class="form-group">

		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('size'=>80,'maxlength'=>300,'placeholder'=>'Descripcion',
																'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Descripcion'); ?>

  </div>
 
 	<div class="form-control">
		<?php echo $form->labelEx($model,'Asignado'); ?>
		<?php echo $form->textField($model,'Asignado',array('size'=>45,'maxlength'=>45,'placeholder'=>'Nombre',)); ?>
		<?php echo $form->error($model,'Asignado'); ?>
	</div>

	<div class="form-control">
		<?php echo $form->labelEx($model,'Estatus'); ?>
		<?php echo $form->dropDownList($model,'Estatus',array('Procesando'=>'Procesando',															  
														      'Espera'=>'En Espera',
														      'Descartado'=>'Descartado',															 
															  'Cerrado'=>'Cerrar',), 
		                                                       array('options' => array('Lab1'=>array('selected'=>true))), 
		                                                       array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Estatus'); ?>
	</div>

	<!--
	<div class="form-control">
		<?php echo $form->labelEx($model,'SolucionFechaHora'); ?>
		<?php echo $form->textField($model,'SolucionFechaHora',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'SolucionFechaHora'); ?>
	</div>
	-->
	
	<div class="form-control">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enviar' : 'Guardar',array('class'=>'btn btn-lg btn-primary')); ?>
	</div>

	
  

<?php $this->endWidget(); ?>

</div><!-- form -->