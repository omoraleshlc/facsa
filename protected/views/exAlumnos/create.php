<?php
/* @var $this ExAlumnosController */
/* @var $model ExAlumnos */

$this->breadcrumbs=array(
	'Ex Alumnoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExAlumnos', 'url'=>array('index')),
	array('label'=>'Manage ExAlumnos', 'url'=>array('admin')),
);
?>

<h1>Create ExAlumnos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>