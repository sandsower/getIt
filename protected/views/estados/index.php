<?php
$this->breadcrumbs=array(
	'Estadoses',
);

$this->menu=array(
	array('label'=>'Create Estados', 'url'=>array('create')),
	array('label'=>'Manage Estados', 'url'=>array('admin')),
);
?>

<h1>Estadoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
