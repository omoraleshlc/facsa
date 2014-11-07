<?php
/* @var $this UmControlAlumnosController */
/* @var $model UmControlAlumnos */

$this->breadcrumbs=array(
	'Inicio de Ex-Alumnos'=>array('index'),
	'Crear/Nuevo',
);

$this->menu=array(
	array('label'=>'Lista ', 'url'=>array('index')),
	array('label'=>'Administrar ', 'url'=>array('admin')),
);
?>

<h1>Agregar Ex-Alumno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>