<?php
/* @var $this CtaController */
/* @var $model Cta */
/* @var $form CActiveForm */
?>




<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>
<div class="login">

		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Nombre'); ?>

		<?php echo $form->labelEx($model,'Password'); ?>
		<?php echo $form->passwordField($model,'Password',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Password'); ?>
	
		<?php echo $form->labelEx($model,'Jerarquia'); ?>
		<?php echo $form->textField($model,'Jerarquia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Jerarquia'); ?>

		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class'=>'btn btn-lg btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->