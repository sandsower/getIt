<?php
$this->breadcrumbs=array(
	'Tipo Usuarios'=>array('index'),
	$model->Tipo_Usuario,
);

$this->menu=array(
	array('label'=>'List TipoUsuario', 'url'=>array('index')),
	array('label'=>'Create TipoUsuario', 'url'=>array('create')),
	array('label'=>'Update TipoUsuario', 'url'=>array('update', 'id'=>$model->Tipo_Usuario)),
	array('label'=>'Delete TipoUsuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Tipo_Usuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoUsuario', 'url'=>array('admin')),
);
?>

<h1>View TipoUsuario #<?php echo $model->Tipo_Usuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Tipo_Usuario',
		'Descripcion',
	),
)); ?>
