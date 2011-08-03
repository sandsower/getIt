<?php
$this->breadcrumbs=array(
	'Impuestoses'=>array('index'),
	$model->idImpuestos=>array('view','id'=>$model->idImpuestos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Impuestos', 'url'=>array('index')),
	array('label'=>'Create Impuestos', 'url'=>array('create')),
	array('label'=>'View Impuestos', 'url'=>array('view', 'id'=>$model->idImpuestos)),
	array('label'=>'Manage Impuestos', 'url'=>array('admin')),
);
?>

<h1>Update Impuestos <?php echo $model->idImpuestos; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>