<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idImagenes_Productos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idImagenes_Productos), array('view', 'id'=>$data->idImagenes_Productos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProductos')); ?>:</b>
	<?php echo CHtml::encode($data->idProductos); ?>
	<br />


</div>