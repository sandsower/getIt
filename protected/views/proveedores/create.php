<?php
$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Proveedores', 'url'=>array('index')),
	array('label'=>'Manage Proveedores', 'url'=>array('admin')),
);
?>

<h1>Create Proveedores</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>