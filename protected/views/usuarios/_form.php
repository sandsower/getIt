<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ApellidoPaterno'); ?>
		<?php echo $form->textField($model,'ApellidoPaterno',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ApellidoPaterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ApellidoMaterno'); ?>
		<?php echo $form->textField($model,'ApellidoMaterno',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ApellidoMaterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuario'); ?>
		<?php echo $form->textField($model,'Usuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Password'); ?>
		<?php echo $form->passwordField($model,'Password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaDeNacimiento'); ?>
		<?php echo $form->textField($model,'FechaDeNacimiento'); ?>
		<?php echo $form->error($model,'FechaDeNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo_Usuario_ID'); ?>
		<?php echo $form->textField($model,'Tipo_Usuario_ID'); ?>
		<?php echo $form->error($model,'Tipo_Usuario_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->