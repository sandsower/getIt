<?php
$this->breadcrumbs=array(
	'Producto Impuestos',
);

$this->menu=array(
	array('label'=>'Create ProductoImpuesto', 'url'=>array('create')),
	array('label'=>'Manage ProductoImpuesto', 'url'=>array('admin')),
);
?>

<h1>Producto Impuestos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
