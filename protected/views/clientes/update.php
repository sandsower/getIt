<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->idClientes=>array('view','id'=>$model->idClientes),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clientes', 'url'=>array('index')),
	array('label'=>'Create Clientes', 'url'=>array('create')),
	array('label'=>'View Clientes', 'url'=>array('view', 'id'=>$model->idClientes)),
	array('label'=>'Manage Clientes', 'url'=>array('admin')),
);
?>

<h1>Update Clientes <?php echo $model->idClientes; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>