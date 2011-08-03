<?php
$this->breadcrumbs=array(
	'Productoses',
);

$this->menu=array(
	array('label'=>'Create Productos', 'url'=>array('create')),
	array('label'=>'Manage Productos', 'url'=>array('admin')),
);
?>

<h1>Productoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
