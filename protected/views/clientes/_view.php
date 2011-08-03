<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idClientes')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idClientes), array('view', 'id'=>$data->idClientes)); ?>
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