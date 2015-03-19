<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/signin.css" />
<div class="form-signin">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<h1 class="form-signin-heading">Inicia Sesión</h1>
<?php echo $form->errorSummary($model, null, null,array("class"=>"alert alert-error")); ?>
		<div class="form-group">

		<?php echo $form->textField($model,'username',array('placeholder'=>'Usuario','class'=>'form-control', 'required onfocus')); ?>
		<?php echo $form->error($model,'username'); ?>
	
	

		<?php echo $form->passwordField($model,'password', array('placeholder'=>'Contraseña', 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'password'); ?>
		</div>
		
		<?php echo CHtml::submitButton('Login', array('class'=>'btn btn-lg btn-primary')); ?>
			
	  
	</div>

	

<?php $this->endWidget(); ?>
</div><!-- form -->
