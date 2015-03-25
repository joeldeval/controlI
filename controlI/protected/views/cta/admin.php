<?php
/* @var $this CtaController */
/* @var $model Cta */


$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),

	array('label'=>'Crear Usuario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<h1>Administrar Usuarios</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<div class="table-responsive">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cta-grid',
	'itemsCssClass'=>'table table-striped table-hover table-condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idCta',
		'Password',
		'Nombre',
		'Jerarquia',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
