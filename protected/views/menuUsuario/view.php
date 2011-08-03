<?php
$this->breadcrumbs=array(
	'Menu Usuarios'=>array('index'),
	$model->idMenu_Usuario,
);

$this->menu=array(
	array('label'=>'List MenuUsuario', 'url'=>array('index')),
	array('label'=>'Create MenuUsuario', 'url'=>array('create')),
	array('label'=>'Update MenuUsuario', 'url'=>array('update', 'id'=>$model->idMenu_Usuario)),
	array('label'=>'Delete MenuUsuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idMenu_Usuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MenuUsuario', 'url'=>array('admin')),
);
?>

<h1>View MenuUsuario #<?php echo $model->idMenu_Usuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idMenu_Usuario',
		'Descripcion',
		'Direccion',
		'Tipo_Usuario_ID',
	),
)); ?>
