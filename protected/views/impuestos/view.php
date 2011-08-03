<?php
$this->breadcrumbs=array(
	'Impuestoses'=>array('index'),
	$model->idImpuestos,
);

$this->menu=array(
	array('label'=>'List Impuestos', 'url'=>array('index')),
	array('label'=>'Create Impuestos', 'url'=>array('create')),
	array('label'=>'Update Impuestos', 'url'=>array('update', 'id'=>$model->idImpuestos)),
	array('label'=>'Delete Impuestos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idImpuestos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Impuestos', 'url'=>array('admin')),
);
?>

<h1>View Impuestos #<?php echo $model->idImpuestos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idImpuestos',
		'Descripcion',
		'Porcentaje',
	),
)); ?>
