<?php
$this->breadcrumbs=array(
	'Proveedor Productos'=>array('index'),
	$model->idProveedor_Producto,
);

$this->menu=array(
	array('label'=>'List ProveedorProducto', 'url'=>array('index')),
	array('label'=>'Create ProveedorProducto', 'url'=>array('create')),
	array('label'=>'Update ProveedorProducto', 'url'=>array('update', 'id'=>$model->idProveedor_Producto)),
	array('label'=>'Delete ProveedorProducto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idProveedor_Producto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProveedorProducto', 'url'=>array('admin')),
);
?>

<h1>View ProveedorProducto #<?php echo $model->idProveedor_Producto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idProveedor_Producto',
		'idProveedores',
		'idProductos',
	),
)); ?>
