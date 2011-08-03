<?php
$this->breadcrumbs=array(
	'Proveedor Productos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProveedorProducto', 'url'=>array('index')),
	array('label'=>'Manage ProveedorProducto', 'url'=>array('admin')),
);
?>

<h1>Create ProveedorProducto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>