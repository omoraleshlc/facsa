<?php
/* @var $this ExAlumnosController */
/* @var $model ExAlumnos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'keyE'); ?>
		<?php echo $form->textField($model,'keyE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matricula'); ?>
		<?php echo $form->textField($model,'matricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Apellido_1'); ?>
		<?php echo $form->textField($model,'Apellido_1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido_2'); ?>
		<?php echo $form->textField($model,'apellido_2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_1'); ?>
		<?php echo $form->textField($model,'Nombre_1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_2'); ?>
		<?php echo $form->textField($model,'Nombre_2',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'generacion'); ?>
		<?php echo $form->textField($model,'generacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vive'); ?>
		<?php echo $form->textField($model,'vive',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaNacimiento'); ?>
		<?php echo $form->textField($model,'fechaNacimiento',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciudadNacimiento'); ?>
		<?php echo $form->textField($model,'ciudadNacimiento',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadoNacimiento'); ?>
		<?php echo $form->textField($model,'estadoNacimiento',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paisNacimiento'); ?>
		<?php echo $form->textField($model,'paisNacimiento',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'promedioCarrera'); ?>
		<?php echo $form->textField($model,'promedioCarrera',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulado'); ?>
		<?php echo $form->textField($model,'titulado',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaTitulacion'); ?>
		<?php echo $form->textField($model,'fechaTitulacion',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'year_ceneval'); ?>
		<?php echo $form->textField($model,'year_ceneval',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'puntos_ceneval'); ?>
		<?php echo $form->textField($model,'puntos_ceneval',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiene_postgrado'); ?>
		<?php echo $form->textField($model,'tiene_postgrado',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoPostgrado'); ?>
		<?php echo $form->textField($model,'tipoPostgrado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Especialidad_1'); ?>
		<?php echo $form->textField($model,'Especialidad_1',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Especialidad_2'); ?>
		<?php echo $form->textField($model,'Especialidad_2',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maestria'); ?>
		<?php echo $form->textField($model,'maestria',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'residencia_medica'); ?>
		<?php echo $form->textField($model,'residencia_medica',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paisActual'); ?>
		<?php echo $form->textField($model,'paisActual',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadoActual'); ?>
		<?php echo $form->textField($model,'estadoActual',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciudadActual'); ?>
		<?php echo $form->textField($model,'ciudadActual',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lugar_trabajo_actual'); ?>
		<?php echo $form->textField($model,'lugar_trabajo_actual',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'puestoTrabajo'); ?>
		<?php echo $form->textField($model,'puestoTrabajo',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiene_puesto_destacado'); ?>
		<?php echo $form->textField($model,'tiene_puesto_destacado',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'puestoDestacado'); ?>
		<?php echo $form->textField($model,'puestoDestacado',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Email_1'); ?>
		<?php echo $form->textField($model,'Email_1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Email_2'); ?>
		<?php echo $form->textField($model,'Email_2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Email_3'); ?>
		<?php echo $form->textField($model,'Email_3',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiene_facebook'); ?>
		<?php echo $form->textField($model,'tiene_facebook',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreFacebook'); ?>
		<?php echo $form->textField($model,'nombreFacebook',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'urlFacebook'); ?>
		<?php echo $form->textField($model,'urlFacebook',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiene_twitter'); ?>
		<?php echo $form->textField($model,'tiene_twitter',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefonoTrabajo'); ?>
		<?php echo $form->textField($model,'telefonoTrabajo',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefonoCasa'); ?>
		<?php echo $form->textField($model,'telefonoCasa',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefonoCelular'); ?>
		<?php echo $form->textField($model,'telefonoCelular',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccionActual'); ?>
		<?php echo $form->textField($model,'direccionActual',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lugarResidencia'); ?>
		<?php echo $form->textField($model,'lugarResidencia',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadoCivil'); ?>
		<?php echo $form->textField($model,'estadoCivil',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conyuge'); ?>
		<?php echo $form->textField($model,'conyuge',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiene_conyuge_egresado'); ?>
		<?php echo $form->textField($model,'tiene_conyuge_egresado',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hermanosEgresados'); ?>
		<?php echo $form->textField($model,'hermanosEgresados',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hijoEgresado'); ?>
		<?php echo $form->textField($model,'hijoEgresado',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->