<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/signin.css" />
  <link href=<?php echo Yii::app()->request->baseUrl."/imagenes/favicon.png" ?> type="image/x-icon" rel="shortcut icon" />
	<?php 
	echo Yii::app()->bootstrap->registerAllCss(); 
	echo Yii::app()->bootstrap->registerCoreScripts(); 
	?>




	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><?php echo Yii::app()->name?></a>
          <div class="nav-collapse collapse pull-right">
            <?php $this->widget('zii.widgets.CMenu',array(
              'htmlOptions'=>array("class"=>"nav"),
              'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
              //  array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
              //  array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Administrar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
              ),
            )); ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

	<?php if(!empty($this->breadcrumbs)):?>
  <div class="container-fluid" style="padding-top:0">
  <div class="row-fluid">
  <div class="span12">
      <?php $this->widget('zii.widgets.CBreadcrumbs', array(
        'htmlOptions'=>array("style"=>"margin: 10px 0;"),
        'links'=>$this->breadcrumbs,
      )); ?><!-- breadcrumbs -->
  </div>
  </div> 
  </div>
<?php endif?>

<?php if(($msgs=Yii::app()->user->getFlashes())!==null and $msgs!==array()):?>
  <div class="container-fluid" style="padding-top:0">
    <div class="row-fluid">
      <div class="span12">
        <?php foreach($msgs as $type => $message):?>
          <div class="alert alert-<?php echo $type?>">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4><?php echo ucfirst($type)?>!</h4>
            <?php echo $message?>
          </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
<?php endif;?>
<?php echo $content;?>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
      

 
  </body>
</html>
