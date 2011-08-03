<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idProveedor_Producto'); ?>
		<?php echo $form->textField($model,'idProveedor_Producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idProveedores'); ?>
		<?php echo $form->textField($model,'idProveedores'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idProductos'); ?>
		<?php echo $form->textField($model,'idProductos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->