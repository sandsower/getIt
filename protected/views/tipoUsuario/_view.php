<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo_Usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Tipo_Usuario), array('view', 'id'=>$data->Tipo_Usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />


</div>