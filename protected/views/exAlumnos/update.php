<?php
/* @var $this ExAlumnosController */
/* @var $model ExAlumnos */

$this->breadcrumbs=array(
	'Ex Alumnos'=>array('index'),
	$model->keyE=>array('view','id'=>$model->keyE),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista ExAlumnos', 'url'=>array('index')),
	array('label'=>'Alta ExAlumnos', 'url'=>array('create')),
	array('label'=>'Ver ExAlumnos', 'url'=>array('view', 'id'=>$model->keyE)),
	array('label'=>'Administrar ExAlumnos', 'url'=>array('admin')),
);
?>

<h1>ActualizarUpdate ExAlumnos <?php echo $model->keyE; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>