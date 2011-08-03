<?php
$this->breadcrumbs=array(
	'Unidad Medidas'=>array('index'),
	$model->idUnidad_Medida,
);

$this->menu=array(
	array('label'=>'List UnidadMedida', 'url'=>array('index')),
	array('label'=>'Create UnidadMedida', 'url'=>array('create')),
	array('label'=>'Update UnidadMedida', 'url'=>array('update', 'id'=>$model->idUnidad_Medida)),
	array('label'=>'Delete UnidadMedida', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idUnidad_Medida),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UnidadMedida', 'url'=>array('admin')),
);
?>

<h1>View UnidadMedida #<?php echo $model->idUnidad_Medida; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idUnidad_Medida',
		'Descripcion',
		'Abreviacion',
	),
)); ?>
