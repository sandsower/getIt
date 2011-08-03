<?php
$this->breadcrumbs=array(
	'Estadoses'=>array('index'),
	$model->id_estado,
);

$this->menu=array(
	array('label'=>'List Estados', 'url'=>array('index')),
	array('label'=>'Create Estados', 'url'=>array('create')),
	array('label'=>'Update Estados', 'url'=>array('update', 'id'=>$model->id_estado)),
	array('label'=>'Delete Estados', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_estado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estados', 'url'=>array('admin')),
);
?>

<h1>View Estados #<?php echo $model->id_estado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_estado',
		'estado',
	),
)); ?>
