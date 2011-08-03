<?php
$this->breadcrumbs=array(
	'Proveedor Productos'=>array('index'),
	$model->idProveedor_Producto=>array('view','id'=>$model->idProveedor_Producto),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProveedorProducto', 'url'=>array('index')),
	array('label'=>'Create ProveedorProducto', 'url'=>array('create')),
	array('label'=>'View ProveedorProducto', 'url'=>array('view', 'id'=>$model->idProveedor_Producto)),
	array('label'=>'Manage ProveedorProducto', 'url'=>array('admin')),
);
?>

<h1>Update ProveedorProducto <?php echo $model->idProveedor_Producto; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>