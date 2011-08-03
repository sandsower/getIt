<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ApellidoPaterno')); ?>:</b>
	<?php echo CHtml::encode($data->ApellidoPaterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ApellidoMaterno')); ?>:</b>
	<?php echo CHtml::encode($data->ApellidoMaterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Password')); ?>:</b>
	<?php echo CHtml::encode($data->Password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaDeNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->FechaDeNacimiento); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo_Usuario_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo_Usuario_ID); ?>
	<br />

	*/ ?>

</div>