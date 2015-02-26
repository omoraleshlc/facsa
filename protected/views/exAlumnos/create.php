<?php
/* @var $this ExAlumnosController */
/* @var $model ExAlumnos */

$this->breadcrumbs=array(
	'Ex Alumnos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista ExAlumnos', 'url'=>array('index')),
	array('label'=>'Administrar ExAlumnos', 'url'=>array('admin')),
);
?>
<br><br>
<h1>Alta de Ex-Alumno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>