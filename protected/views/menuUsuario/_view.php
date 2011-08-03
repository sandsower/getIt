<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idMenu_Usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idMenu_Usuario), array('view', 'id'=>$data->idMenu_Usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo_Usuario_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo_Usuario_ID); ?>
	<br />


</div>