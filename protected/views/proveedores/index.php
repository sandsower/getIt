<?php
$this->breadcrumbs=array(
	'Proveedores',
);

$this->menu=array(
	array('label'=>'Create Proveedores', 'url'=>array('create')),
	array('label'=>'Manage Proveedores', 'url'=>array('admin')),
);
?>

<h1>Proveedores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
