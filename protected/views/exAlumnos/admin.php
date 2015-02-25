<?php
/* @var $this ExAlumnosController */
/* @var $model ExAlumnos */

$this->breadcrumbs=array(
	'Ex Alumnoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ExAlumnos', 'url'=>array('index')),
	array('label'=>'Create ExAlumnos', 'url'=>array('create')),
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

<h1>Manage Ex Alumnoses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
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
		'keyE',
		'matrícula',
		'Apellido_1',
		'apellido_2',
		'Nombre_1',
		'Nombre_2',
		/*
		'generacion',
		'vive',
		'fechaNacimiento',
		'ciudadNacimiento',
		'estadoNacimiento',
		'paisNacimiento',
		'promedioCarrera',
		'titulado',
		'fechaTitulacion',
		'year_ceneval',
		'puntos_ceneval',
		'tiene_postgrado',
		'tipoPostgrado',
		'Especialidad_1',
		'Especialidad_2',
		'maestria',
		'residencia_medica',
		'paisActual',
		'estadoActual',
		'ciudadActual',
		'lugar_trabajo_actual',
		'puestoTrabajo',
		'tiene_puesto_destacado',
		'puestoDestacado',
		'Email_1',
		'Email_2',
		'Email_3',
		'tiene_facebook',
		'nombreFacebook',
		'urlFacebook',
		'tiene_twitter',
		'telefonoTrabajo',
		'telefonoCasa',
		'telefonoCelular',
		'direccionActual',
		'lugarResidencia',
		'estadoCivil',
		'conyuge',
		'tiene_conyuge_egresado',
		'hermanosEgresados',
		'hijoEgresado',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
