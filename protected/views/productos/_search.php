<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idProductos'); ?>
		<?php echo $form->textField($model,'idProductos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Precio'); ?>
		<?php echo $form->textField($model,'Precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idCategorias'); ?>
		<?php echo $form->textField($model,'idCategorias'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idUnidad_Medida'); ?>
		<?php echo $form->textField($model,'idUnidad_Medida'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->