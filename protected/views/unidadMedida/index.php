<?php
$this->breadcrumbs=array(
	'Unidad Medidas',
);

$this->menu=array(
	array('label'=>'Create UnidadMedida', 'url'=>array('create')),
	array('label'=>'Manage UnidadMedida', 'url'=>array('admin')),
);
?>

<h1>Unidad Medidas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
