<?php
$this->breadcrumbs=array(
	'Impuestoses',
);

$this->menu=array(
	array('label'=>'Create Impuestos', 'url'=>array('create')),
	array('label'=>'Manage Impuestos', 'url'=>array('admin')),
);
?>

<h1>Impuestoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
