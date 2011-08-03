<?php
$this->breadcrumbs=array(
	'Proveedor Productos',
);

$this->menu=array(
	array('label'=>'Create ProveedorProducto', 'url'=>array('create')),
	array('label'=>'Manage ProveedorProducto', 'url'=>array('admin')),
);
?>

<h1>Proveedor Productos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
