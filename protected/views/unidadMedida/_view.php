<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUnidad_Medida')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idUnidad_Medida), array('view', 'id'=>$data->idUnidad_Medida)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Abreviacion')); ?>:</b>
	<?php echo CHtml::encode($data->Abreviacion); ?>
	<br />


</div>