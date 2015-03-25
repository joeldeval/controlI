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
      <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/background.css" />

 <section class"imagefoot">
      <div class="carrusel">

        <img  id="back" src="<?php echo Yii::app()->baseUrl; ?>/imagenes/background.jpg">
          
             <a href="<?php echo Yii::app()->homeUrl.'/incidentes/create' ?>">
              <img id="imgReporta"  src="<?php echo Yii::app()->baseUrl; ?>/imagenes/reporta.png">
            </a> 

              <a href="<?php echo Yii::app()->homeUrl.'/incidentes/admin' ?>">
              <img id="imgAdmin"  src="<?php echo Yii::app()->baseUrl; ?>/imagenes/observa.png">
            </a> 
          <div class="textReporta">
            <h2 id="textfont">Reporta tus inconvenientes.</h2>
          </div>

          <div class="textAdmin">
            <h2 id="textfont">Observa incidentes.</h2>
          </div>
<div class="opcity"></div>
        </div>
  </section> 


<!-- <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">
          <h1 class="page-header">Reporta Incidentes dentro de los Laboratorios de CUTONALÁ</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-7 placeholder">
            <a href="<?php// echo Yii::app()->homeUrl.'/incidentes/create' ?>">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="200x200" src="<?php echo Yii::app()->baseUrl; ?>/imagenes/reporta.png" data-holder-rendered="true">
            </a> 
              <h4>REPORTA</h4>
              <span class="text-muted">Reporta tus inconvenientes.</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
             <a href="<?php// echo Yii::app()->homeUrl.'/incidentes/admin' ?>">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="200x200" src="<?php echo Yii::app()->baseUrl; ?>/imagenes/observa.png" data-holder-rendered="true">
              </a>
              <h4>Administra</h4>
              <span class="text-muted">CTA observa reporte.</span>
            </div>
            
          </div> 
    
 </div> -->