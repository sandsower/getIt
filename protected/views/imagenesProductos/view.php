<?php
$this->breadcrumbs=array(
	'Imagenes Productoses'=>array('index'),
	$model->idImagenes_Productos,
);

$this->menu=array(
	array('label'=>'List ImagenesProductos', 'url'=>array('index')),
	array('label'=>'Create ImagenesProductos', 'url'=>array('create')),
	array('label'=>'Update ImagenesProductos', 'url'=>array('update', 'id'=>$model->idImagenes_Productos)),
	array('label'=>'Delete ImagenesProductos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idImagenes_Productos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ImagenesProductos', 'url'=>array('admin')),
);
?>

<h1>View ImagenesProductos #<?php echo $model->idImagenes_Productos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idImagenes_Productos',
		'Nombre',
		'Descripcion',
		'Direccion',
		'idProductos',
	),
)); ?>
