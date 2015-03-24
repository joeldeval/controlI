<?php
/* @var $this IncidentesController */
/* @var $model Incidentes */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'incidentes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<?php echo $msg; ?>
	<?php echo $form->errorSummary($model,null,null,array("class"=>"alert alert-error")); ?>
	
<div class="login">

		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('size'=>80,'maxlength'=>300,'placeholder'=>'Descripcion',
																'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Descripcion'); ?>

  	<?php echo $form->labelEx($model,'Categoria'); ?>
		<?php echo $form->dropDownList($model,'Categoria',array('equipo'=>'Equipo','infraestructura'=>'Infraestructura'), 
		                                                       array('options' => array('equipo'=>array('selected'=>true))), 
		                                                       array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Categoria'); ?>

		<?php echo $form->labelEx($model,'Laboratorio'); ?>
		<?php echo $form->dropDownList($model,'Laboratorio',array('Lab1'=>'Laboratorio 1','Lab2'=>'Laboratorio 2',
																  'Lab3'=>'Laboratorio 3','Lab4'=>'Laboratorio 4',
																  'Lab5'=>'Laboratorio 5','Lab6'=>'Laboratorio 6',), 
		                                                       array('options' => array('Lab1'=>array('selected'=>true))), 
		                                                       array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Laboratorio'); ?>

		<?php echo $form->labelEx($model,'Urgencia'); ?>
		<?php echo $form->dropDownList($model,'Urgencia',array('Urgente'=>'Urgente',
															  'MuyAlto'=>'Muy Alto',
															  'Alto'=>'Alto',
															  'Normal'=>'Normal',
															  'Bajo'=>'Bajo',

																  ), 
		                                                       array('options' => array('Urgente'=>array('selected'=>true))), 
		                                                       array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Urgencia'); ?>

		<?php echo $form->labelEx($model,'Equipo'); ?>
		<?php echo $form->textField($model,'Equipo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Equipo'); ?>

		<?php echo $form->labelEx($model,'Inmueble'); ?>
		<?php echo $form->fileField($model,'Inmueble',array('size'=>45,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'Inmueble'); ?>

		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enviar' : 'Guardar',array('class'=>'btn btn-lg btn-primary')); ?>
	</div>

 <!--  <div class="form-group">
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div> -->
  

<?php $this->endWidget(); ?>

</div><!-- form -->