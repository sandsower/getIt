<?php
$this->breadcrumbs=array(
	'Imagenes Productoses'=>array('index'),
	$model->idImagenes_Productos=>array('view','id'=>$model->idImagenes_Productos),
	'Update',
);

$this->menu=array(
	array('label'=>'List ImagenesProductos', 'url'=>array('index')),
	array('label'=>'Create ImagenesProductos', 'url'=>array('create')),
	array('label'=>'View ImagenesProductos', 'url'=>array('view', 'id'=>$model->idImagenes_Productos)),
	array('label'=>'Manage ImagenesProductos', 'url'=>array('admin')),
);
?>

<h1>Update ImagenesProductos <?php echo $model->idImagenes_Productos; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>