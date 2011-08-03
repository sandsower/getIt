<?php
$this->breadcrumbs=array(
	'Producto Impuestos'=>array('index'),
	$model->idProducto_Impuesto,
);

$this->menu=array(
	array('label'=>'List ProductoImpuesto', 'url'=>array('index')),
	array('label'=>'Create ProductoImpuesto', 'url'=>array('create')),
	array('label'=>'Update ProductoImpuesto', 'url'=>array('update', 'id'=>$model->idProducto_Impuesto)),
	array('label'=>'Delete ProductoImpuesto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idProducto_Impuesto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductoImpuesto', 'url'=>array('admin')),
);
?>

<h1>View ProductoImpuesto #<?php echo $model->idProducto_Impuesto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idProducto_Impuesto',
		'idProductos',
		'idImpuestos',
	),
)); ?>
