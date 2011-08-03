<?php
$this->breadcrumbs=array(
	'Imagenes Productoses',
);

$this->menu=array(
	array('label'=>'Create ImagenesProductos', 'url'=>array('create')),
	array('label'=>'Manage ImagenesProductos', 'url'=>array('admin')),
);
?>

<h1>Imagenes Productoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
