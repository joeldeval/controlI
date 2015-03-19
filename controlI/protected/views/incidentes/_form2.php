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
  <div class="form-group">
  	<?php echo $form->labelEx($model,'Categoria'); ?>
		<?php echo $form->dropDownList($model,'Categoria',array('equipo'=>'Equipo','infraestructura'=>'Infraestructura'), 
		                                                       array('options' => array('equipo'=>array('selected'=>true))), 
		                                                       array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Categoria'); ?>
  </div>
  -->

 <div class="form-control">
		<?php echo $form->labelEx($model,'Asignado'); ?>
		<?php echo $form->textField($model,'Asignado',array('size'=>45,'maxlength'=>45,'placeholder'=>'Nombre',)); ?>
		<?php echo $form->error($model,'Asignado'); ?>
	</div>

	<div class="form-control">
		<?php echo $form->labelEx($model,'SolucionFechaHora'); ?>
		<?php echo $form->textField($model,'SolucionFechaHora',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'SolucionFechaHora'); ?>
	</div>


	<div class="form-control">
		<?php echo $form->labelEx($model,'ModificacionFechaHora'); ?>
		<?php echo $form->textField($model,'ModificacionFechaHora',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ModificacionFechaHora'); ?>
	</div>

<!--
	<div class="form-control">
		<?php echo $form->labelEx($model,'Equipo'); ?>
		<?php echo $form->textField($model,'Equipo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Equipo'); ?>
	</div>
-->

<!--
	<div class="form-control">
		<?php echo $form->labelEx($model,'Laboratorio'); ?>
		<?php echo $form->dropDownList($model,'Laboratorio',array('Lab1'=>'Laboratorio 1','Lab2'=>'Laboratorio 2',
																  'Lab3'=>'Laboratorio 3','Lab4'=>'Laboratorio 4',
																  'Lab5'=>'Laboratorio 5','Lab6'=>'Laboratorio 6',), 
		                                                       array('options' => array('Lab1'=>array('selected'=>true))), 
		                                                       array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Laboratorio'); ?>
	</div>
-->

<!--
	<div class="form-control">
		<?php echo $form->labelEx($model,'Laboratorio'); ?>
		<?php echo $form->dropDownList($model,'Laboratorio',array('Nuevo'=>'Nuevo',
																  'Activo'=>'Activo',
																  'Procesando'=>'Procesando',
																  'Cerrado'=>'Cerrado',), 
		                                                       array('options' => array('Nuevo'=>array('selected'=>true))), 
		                                                       array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Laboratorio'); ?>
	</div>
	-->

<!--
	<div class="form-control">
		<?php echo $form->labelEx($model,'Equipo'); ?>
		<?php echo $form->textField($model,'Equipo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Equipo'); ?>
	</div>
-->

<!--
	<div class="form-control">
		<?php echo $form->labelEx($model,'Inmueble'); ?>
		<?php echo $form->fileField($model,'Inmueble',array('size'=>45,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'Inmueble'); ?>

	</div>-->
	
	<div class="form-control">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enviar' : 'Guardar',array('class'=>'btn btn-lg btn-primary')); ?>
	</div>

 <!--  <div class="form-group">
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div> -->
  

<?php $this->endWidget(); ?>

</div><!-- form -->