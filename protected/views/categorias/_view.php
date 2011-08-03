<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCategorias')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCategorias), array('view', 'id'=>$data->idCategorias)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Orden')); ?>:</b>
	<?php echo CHtml::encode($data->Orden); ?>
	<br />


</div>