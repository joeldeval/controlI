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
 
<!--
	<div class="form-control">
		<?php echo $form->labelEx($model,'SolucionFechaHora'); ?>
		<?php //echo $form->textField($model,'SolucionFechaHora',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->textField($model,'SolucionFechaHora', array('size'=>45,'maxlength'=>45,'value'=>date('Y-m-d H:i:s')));?>
		<?php echo $form->error($model,'SolucionFechaHora'); ?>
	</div>
-->

	
	<div class="form-control">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enviar' : 'Guardar',array('class'=>'btn btn-lg btn-primary')); ?>
	</div>

 <!--  <div class="form-group">
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div> -->
  

<?php $this->endWidget(); ?>

</div><!-- form -->