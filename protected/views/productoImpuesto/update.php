<?php
$this->breadcrumbs=array(
	'Producto Impuestos'=>array('index'),
	$model->idProducto_Impuesto=>array('view','id'=>$model->idProducto_Impuesto),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductoImpuesto', 'url'=>array('index')),
	array('label'=>'Create ProductoImpuesto', 'url'=>array('create')),
	array('label'=>'View ProductoImpuesto', 'url'=>array('view', 'id'=>$model->idProducto_Impuesto)),
	array('label'=>'Manage ProductoImpuesto', 'url'=>array('admin')),
);
?>

<h1>Update ProductoImpuesto <?php echo $model->idProducto_Impuesto; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>