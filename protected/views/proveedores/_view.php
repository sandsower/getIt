<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProveedores')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProveedores), array('view', 'id'=>$data->idProveedores)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Clave')); ?>:</b>
	<?php echo CHtml::encode($data->Clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuarios_id')); ?>:</b>
	<?php echo CHtml::encode($data->Usuarios_id); ?>
	<br />


</div>