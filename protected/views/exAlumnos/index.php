<?php
/* @var $this ExAlumnosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ex Alumnoses',
);

$this->menu=array(
	array('label'=>'Create ExAlumnos', 'url'=>array('create')),
	array('label'=>'Manage ExAlumnos', 'url'=>array('admin')),
);
?>

<h1>Ex Alumnoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
