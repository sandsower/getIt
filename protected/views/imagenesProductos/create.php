<?php
$this->breadcrumbs=array(
	'Imagenes Productoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ImagenesProductos', 'url'=>array('index')),
	array('label'=>'Manage ImagenesProductos', 'url'=>array('admin')),
);
?>

<h1>Create ImagenesProductos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>