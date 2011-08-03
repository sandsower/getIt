<?php
$this->breadcrumbs=array(
	'Impuestoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Impuestos', 'url'=>array('index')),
	array('label'=>'Manage Impuestos', 'url'=>array('admin')),
);
?>

<h1>Create Impuestos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>