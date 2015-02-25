<?php
/* @var $this ExAlumnosController */
/* @var $model ExAlumnos */

$this->breadcrumbs=array(
	'Ex Alumnos'=>array('index'),
	$model->keyE,
);

$this->menu=array(
	array('label'=>'List ExAlumnos', 'url'=>array('index')),
	array('label'=>'Create ExAlumnos', 'url'=>array('create')),
	array('label'=>'Update ExAlumnos', 'url'=>array('update', 'id'=>$model->keyE)),
	array('label'=>'Delete ExAlumnos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyE),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExAlumnos', 'url'=>array('admin')),
);
?>

<h1>View ExAlumnos #<?php echo $model->keyE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyE',
		'matricula',
		'Apellido_1',
		'apellido_2',
		'Nombre_1',
		'Nombre_2',
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
	),
)); ?>
