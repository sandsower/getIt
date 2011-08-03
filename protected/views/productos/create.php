<?php
$this->breadcrumbs=array(
	'Productoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Productos', 'url'=>array('index')),
	array('label'=>'Manage Productos', 'url'=>array('admin')),
);
?>

<h1>Create Productos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>