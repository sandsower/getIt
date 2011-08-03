<?php
$this->breadcrumbs=array(
	'Menu Usuarios',
);

$this->menu=array(
	array('label'=>'Create MenuUsuario', 'url'=>array('create')),
	array('label'=>'Manage MenuUsuario', 'url'=>array('admin')),
);
?>

<h1>Menu Usuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
