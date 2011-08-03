<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idImpuestos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idImpuestos), array('view', 'id'=>$data->idImpuestos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Porcentaje')); ?>:</b>
	<?php echo CHtml::encode($data->Porcentaje); ?>
	<br />


</div>