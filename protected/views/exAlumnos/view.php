<?php
/* @var $this ExAlumnosController */
/* @var $model ExAlumnos */

$this->breadcrumbs=array(
	'Ex Alumnos'=>array('index'),
	$model->keyE,
);

$this->menu=array(
	array('label'=>'Lista ExAlumnos', 'url'=>array('index')),
	array('label'=>'Alta de ExAlumnos', 'url'=>array('create')),
	array('label'=>'Actualizar ExAlumnos', 'url'=>array('update', 'id'=>$model->keyE)),
	array('label'=>'Eliminar ExAlumnos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyE),'confirm'=>'Estás seguro que deseas eliminar éste Ex-Alumno?')),
	array('label'=>'Administrar ExAlumnos', 'url'=>array('admin')),
);
?>



<h1>Ver ID de Ex-Alumnos #<?php echo $model->keyE; ?></h1>

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
