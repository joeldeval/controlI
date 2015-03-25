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

<div id="form-main">
  <div id="form-div">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'form1',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<h1>Inicia Sesión</h1>
<?php echo sha1(md5("superusuarioroot")) ?>
<?php echo $form->errorSummary($model, null, null,array("class"=>"alert alert-error")); ?>
		<div class="login">
		<p class="name">
		<?php echo $form->textField($model,'username',array('placeholder'=>'Usuario','class'=>'form-control', 'required onfocus')); ?>
		<?php echo $form->error($model,'username'); ?>
		</p>


		<?php echo $form->passwordField($model,'password', array('placeholder'=>'Contraseña', 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'password'); ?>

		<?php echo CHtml::submitButton('Login', array('class'=>'btn btn-primary btn-block btn-large')); ?>
		</div>
		
		
			
	  
	</div>

	

<?php $this->endWidget(); ?>
</div>
</div><!-- form -->

<!-- <div class="login">
	<h1>Login</h1>
    <form method="post">
    	<input type="text" name="u" placeholder="Username" required="required" />
        <input type="password" name="p" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
</div> -->

<!-- <div id="form-main">
  <div id="form-div">

    <form class="form" id="form1">
      
      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
      </p>
      
      <p class="email">
        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
      </p>
      
      <p class="text">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
      </p>
      
      
      <div class="submit">
        <input type="submit" value="SEND" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>

  </div> -->