<?php
/* @var $this CtaController */
/* @var $data Cta */
?>


<div class="table ">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCta), array('view', 'id'=>$data->idCta)); ?>
	<br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

</div>
<br>