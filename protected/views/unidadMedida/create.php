<?php
$this->breadcrumbs=array(
	'Unidad Medidas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UnidadMedida', 'url'=>array('index')),
	array('label'=>'Manage UnidadMedida', 'url'=>array('admin')),
);
?>

<h1>Create UnidadMedida</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>