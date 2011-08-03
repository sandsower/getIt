<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-impuesto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idProductos'); ?>
		<?php echo $form->textField($model,'idProductos'); ?>
		<?php echo $form->error($model,'idProductos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idImpuestos'); ?>
		<?php echo $form->textField($model,'idImpuestos'); ?>
		<?php echo $form->error($model,'idImpuestos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->