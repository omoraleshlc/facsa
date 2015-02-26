<?php
/* @var $this ExAlumnosController */
/* @var $model ExAlumnos */

$this->breadcrumbs=array(
	'Ex Alumnos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista ExAlumnos', 'url'=>array('index')),
	array('label'=>'Alta de ExAlumnos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ex-alumnos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<div class="container">
<h1>Búsquedas de Ex-Alumnos</h1>



<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ex-alumnos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'matricula',
		'Apellido_1',
		'apellido_2',
		'Nombre_1',
		'Nombre_2',		
		'generacion',
			
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>