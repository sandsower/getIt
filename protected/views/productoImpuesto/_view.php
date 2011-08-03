<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProducto_Impuesto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProducto_Impuesto), array('view', 'id'=>$data->idProducto_Impuesto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProductos')); ?>:</b>
	<?php echo CHtml::encode($data->idProductos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idImpuestos')); ?>:</b>
	<?php echo CHtml::encode($data->idImpuestos); ?>
	<br />


</div>