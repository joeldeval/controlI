<?php
/* @var $this CtaController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>
<div id="form-main">
  <div id="form-div">
<h1>Usuarios de CTA</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
