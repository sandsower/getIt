<?php
$this->breadcrumbs=array(
	'Menu Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MenuUsuario', 'url'=>array('index')),
	array('label'=>'Manage MenuUsuario', 'url'=>array('admin')),
);
?>

<h1>Create MenuUsuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>