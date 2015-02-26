<?php
/* @var $this ExAlumnosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ex Alumnos',
);

$this->menu=array(
	array('label'=>'Alta de ExAlumnos', 'url'=>array('create')),
	array('label'=>'Administrar ExAlumnos', 'url'=>array('admin')),
);
?>

<h1>Lista de Ex- Alumnos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
