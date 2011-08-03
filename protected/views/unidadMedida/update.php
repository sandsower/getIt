<?php
$this->breadcrumbs=array(
	'Unidad Medidas'=>array('index'),
	$model->idUnidad_Medida=>array('view','id'=>$model->idUnidad_Medida),
	'Update',
);

$this->menu=array(
	array('label'=>'List UnidadMedida', 'url'=>array('index')),
	array('label'=>'Create UnidadMedida', 'url'=>array('create')),
	array('label'=>'View UnidadMedida', 'url'=>array('view', 'id'=>$model->idUnidad_Medida)),
	array('label'=>'Manage UnidadMedida', 'url'=>array('admin')),
);
?>

<h1>Update UnidadMedida <?php echo $model->idUnidad_Medida; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>