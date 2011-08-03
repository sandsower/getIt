<?php
$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	$model->idProveedores,
);

$this->menu=array(
	array('label'=>'List Proveedores', 'url'=>array('index')),
	array('label'=>'Create Proveedores', 'url'=>array('create')),
	array('label'=>'Update Proveedores', 'url'=>array('update', 'id'=>$model->idProveedores)),
	array('label'=>'Delete Proveedores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idProveedores),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proveedores', 'url'=>array('admin')),
);
?>

<h1>View Proveedores #<?php echo $model->idProveedores; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idProveedores',
		'Clave',
		'Nombre',
		'Direccion',
		'Telefono',
		'Usuarios_id',
	),
)); ?>
