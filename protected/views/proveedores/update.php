<?php
$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	$model->idProveedores=>array('view','id'=>$model->idProveedores),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proveedores', 'url'=>array('index')),
	array('label'=>'Create Proveedores', 'url'=>array('create')),
	array('label'=>'View Proveedores', 'url'=>array('view', 'id'=>$model->idProveedores)),
	array('label'=>'Manage Proveedores', 'url'=>array('admin')),
);
?>

<h1>Update Proveedores <?php echo $model->idProveedores; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>