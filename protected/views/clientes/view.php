<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->idClientes,
);

$this->menu=array(
	array('label'=>'List Clientes', 'url'=>array('index')),
	array('label'=>'Create Clientes', 'url'=>array('create')),
	array('label'=>'Update Clientes', 'url'=>array('update', 'id'=>$model->idClientes)),
	array('label'=>'Delete Clientes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idClientes),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Clientes', 'url'=>array('admin')),
);
?>

<h1>View Clientes #<?php echo $model->idClientes; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idClientes',
		'Nombre',
		'Direccion',
		'Telefono',
		'Usuarios_id',
	),
)); ?>
