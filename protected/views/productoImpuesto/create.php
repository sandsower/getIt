<?php
$this->breadcrumbs=array(
	'Producto Impuestos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductoImpuesto', 'url'=>array('index')),
	array('label'=>'Manage ProductoImpuesto', 'url'=>array('admin')),
);
?>

<h1>Create ProductoImpuesto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>