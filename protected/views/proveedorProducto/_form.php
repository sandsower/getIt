<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proveedor-producto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idProveedor_Producto'); ?>
		<?php echo $form->textField($model,'idProveedor_Producto'); ?>
		<?php echo $form->error($model,'idProveedor_Producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idProveedores'); ?>
		<?php echo $form->textField($model,'idProveedores'); ?>
		<?php echo $form->error($model,'idProveedores'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idProductos'); ?>
		<?php echo $form->textField($model,'idProductos'); ?>
		<?php echo $form->error($model,'idProductos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->