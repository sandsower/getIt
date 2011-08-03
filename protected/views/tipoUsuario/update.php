<?php
$this->breadcrumbs=array(
	'Tipo Usuarios'=>array('index'),
	$model->Tipo_Usuario=>array('view','id'=>$model->Tipo_Usuario),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoUsuario', 'url'=>array('index')),
	array('label'=>'Create TipoUsuario', 'url'=>array('create')),
	array('label'=>'View TipoUsuario', 'url'=>array('view', 'id'=>$model->Tipo_Usuario)),
	array('label'=>'Manage TipoUsuario', 'url'=>array('admin')),
);
?>

<h1>Update TipoUsuario <?php echo $model->Tipo_Usuario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>