<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/dashboard.css" />



<div class="center">
		<?php echo $content; ?>
</div>


<div >
	<div class="col-sm-3 col-md-2 sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operaciones',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'nav nav-sidebar'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>

<?php $this->endContent(); ?>