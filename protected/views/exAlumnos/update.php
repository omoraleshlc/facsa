<?php
/* @var $this ExAlumnosController */
/* @var $model ExAlumnos */

$this->breadcrumbs=array(
	'Ex Alumnoses'=>array('index'),
	$model->keyE=>array('view','id'=>$model->keyE),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExAlumnos', 'url'=>array('index')),
	array('label'=>'Create ExAlumnos', 'url'=>array('create')),
	array('label'=>'View ExAlumnos', 'url'=>array('view', 'id'=>$model->keyE)),
	array('label'=>'Manage ExAlumnos', 'url'=>array('admin')),
);
?>

<h1>Update ExAlumnos <?php echo $model->keyE; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>