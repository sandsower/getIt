<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProveedor_Producto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProveedor_Producto), array('view', 'id'=>$data->idProveedor_Producto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProveedores')); ?>:</b>
	<?php echo CHtml::encode($data->idProveedores); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProductos')); ?>:</b>
	<?php echo CHtml::encode($data->idProductos); ?>
	<br />


</div>