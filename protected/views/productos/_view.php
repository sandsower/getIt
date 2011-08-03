<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProductos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProductos), array('view', 'id'=>$data->idProductos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Precio')); ?>:</b>
	<?php echo CHtml::encode($data->Precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCategorias')); ?>:</b>
	<?php echo CHtml::encode($data->idCategorias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUnidad_Medida')); ?>:</b>
	<?php echo CHtml::encode($data->idUnidad_Medida); ?>
	<br />


</div>