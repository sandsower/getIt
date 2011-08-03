<?php
$this->breadcrumbs=array(
	'Estadoses'=>array('index'),
	$model->id_estado=>array('view','id'=>$model->id_estado),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estados', 'url'=>array('index')),
	array('label'=>'Create Estados', 'url'=>array('create')),
	array('label'=>'View Estados', 'url'=>array('view', 'id'=>$model->id_estado)),
	array('label'=>'Manage Estados', 'url'=>array('admin')),
);
?>

<h1>Update Estados <?php echo $model->id_estado; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>