<?php
$this->breadcrumbs=array(
	'Menu Usuarios'=>array('index'),
	$model->idMenu_Usuario=>array('view','id'=>$model->idMenu_Usuario),
	'Update',
);

$this->menu=array(
	array('label'=>'List MenuUsuario', 'url'=>array('index')),
	array('label'=>'Create MenuUsuario', 'url'=>array('create')),
	array('label'=>'View MenuUsuario', 'url'=>array('view', 'id'=>$model->idMenu_Usuario)),
	array('label'=>'Manage MenuUsuario', 'url'=>array('admin')),
);
?>

<h1>Update MenuUsuario <?php echo $model->idMenu_Usuario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>