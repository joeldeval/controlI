<?php
/* @var $this CtaController */
/* @var $model Cta */
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
	
		<?php echo $form->label($model,'idCta'); ?>
		<?php echo $form->textField($model,'idCta'); ?>
	
		<?php echo $form->label($model,'Password'); ?>
		<?php echo $form->passwordField($model,'Password',array('size'=>60,'maxlength'=>100)); ?>

		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>50,'maxlength'=>50)); ?>

		<?php echo $form->label($model,'Jerarquia'); ?>
		<?php echo $form->textField($model,'Jerarquia',array('size'=>45,'maxlength'=>45)); ?>
	</div>
</div>
</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->