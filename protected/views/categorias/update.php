<?php
$this->breadcrumbs=array(
	'Categoriases'=>array('index'),
	$model->idCategorias=>array('view','id'=>$model->idCategorias),
	'Update',
);

$this->menu=array(
	array('label'=>'List Categorias', 'url'=>array('index')),
	array('label'=>'Create Categorias', 'url'=>array('create')),
	array('label'=>'View Categorias', 'url'=>array('view', 'id'=>$model->idCategorias)),
	array('label'=>'Manage Categorias', 'url'=>array('admin')),
);
?>

<h1>Update Categorias <?php echo $model->idCategorias; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>