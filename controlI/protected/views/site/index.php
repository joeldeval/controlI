<?php
/* @var $this SiteController */

//$this->redirect(Yii::app()->homeUrl."/incidentes/create");

?>

<!-- <h1>Welcome to <i><?php //echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php // echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php //echo $this->getLayoutFile('main'); ?></code></li>
</ul> 

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p> -->

  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/dashboard.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/bootstrap-3.0.0/css/bootstrap.min.css" />
    <script src="<?php echo Yii::app()->baseUrl?>/js/bootstrap.min.js"></script>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">
          <h1 class="page-header">Reporta Incidentes dentro de los Laboratorios de CUTONALÁ</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
            <a href="<?php echo Yii::app()->homeUrl.'/incidentes/create' ?>">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="200x200" src="<?php echo Yii::app()->baseUrl; ?>/imagenes/reporta.png" data-holder-rendered="true">
            </a> 
              <h4>1er Paso</h4>
              <span class="text-muted">Reporta tus inconvenientes.</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="200x200" src="<?php echo Yii::app()->baseUrl; ?>/imagenes/observa.png" data-holder-rendered="true">
              <h4>2do Paso</h4>
              <span class="text-muted">CTA observa reporte</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="200x200" src="<?php echo Yii::app()->baseUrl; ?>/imagenes/asiste.png" data-holder-rendered="true">
              <h4>3er Paso</h4>
              <span class="text-muted">Asisten al Problema</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="200x200" src="<?php echo Yii::app()->baseUrl; ?>/imagenes/repara.png" data-holder-rendered="true">
              <h4>4to Paso</h4>
              <span class="text-muted">Resuelven Problema</span>
            </div>
          </div>          
        </div>