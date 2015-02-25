<?php
/* @var $this ExAlumnosController */
/* @var $model ExAlumnos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ex-alumnos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'matricula'); ?>
		<?php echo $form->textField($model,'matricula'); ?>
		<?php echo $form->error($model,'matricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellido_1'); ?>
		<?php echo $form->textField($model,'Apellido_1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Apellido_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido_2'); ?>
		<?php echo $form->textField($model,'apellido_2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'apellido_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre_1'); ?>
		<?php echo $form->textField($model,'Nombre_1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Nombre_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre_2'); ?>
		<?php echo $form->textField($model,'Nombre_2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Nombre_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'generacion'); ?>
		<?php echo $form->textField($model,'generacion'); ?>
		<?php echo $form->error($model,'generacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vive'); ?>
		<?php echo $form->textField($model,'vive',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'vive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaNacimiento'); ?>
		<?php echo $form->textField($model,'fechaNacimiento',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'fechaNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudadNacimiento'); ?>
		<?php echo $form->textField($model,'ciudadNacimiento',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ciudadNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoNacimiento'); ?>
		<?php echo $form->textField($model,'estadoNacimiento',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'estadoNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paisNacimiento'); ?>
		<?php echo $form->textField($model,'paisNacimiento',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'paisNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'promedioCarrera'); ?>
		<?php echo $form->textField($model,'promedioCarrera',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'promedioCarrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titulado'); ?>
		<?php echo $form->textField($model,'titulado',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'titulado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaTitulacion'); ?>
		<?php echo $form->textField($model,'fechaTitulacion',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'fechaTitulacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year_ceneval'); ?>
		<?php echo $form->textField($model,'year_ceneval',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'year_ceneval'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'puntos_ceneval'); ?>
		<?php echo $form->textField($model,'puntos_ceneval',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'puntos_ceneval'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiene_postgrado'); ?>
		<?php echo $form->textField($model,'tiene_postgrado',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'tiene_postgrado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoPostgrado'); ?>
		<?php echo $form->textField($model,'tipoPostgrado'); ?>
		<?php echo $form->error($model,'tipoPostgrado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Especialidad_1'); ?>
		<?php echo $form->textField($model,'Especialidad_1',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Especialidad_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Especialidad_2'); ?>
		<?php echo $form->textField($model,'Especialidad_2',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Especialidad_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maestria'); ?>
		<?php echo $form->textField($model,'maestria',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'maestria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'residencia_medica'); ?>
		<?php echo $form->textField($model,'residencia_medica',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'residencia_medica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paisActual'); ?>
		<?php echo $form->textField($model,'paisActual',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'paisActual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoActual'); ?>
		<?php echo $form->textField($model,'estadoActual',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'estadoActual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudadActual'); ?>
		<?php echo $form->textField($model,'ciudadActual',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ciudadActual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar_trabajo_actual'); ?>
		<?php echo $form->textField($model,'lugar_trabajo_actual',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'lugar_trabajo_actual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'puestoTrabajo'); ?>
		<?php echo $form->textField($model,'puestoTrabajo',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'puestoTrabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiene_puesto_destacado'); ?>
		<?php echo $form->textField($model,'tiene_puesto_destacado',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'tiene_puesto_destacado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'puestoDestacado'); ?>
		<?php echo $form->textField($model,'puestoDestacado',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'puestoDestacado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email_1'); ?>
		<?php echo $form->textField($model,'Email_1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Email_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email_2'); ?>
		<?php echo $form->textField($model,'Email_2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Email_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email_3'); ?>
		<?php echo $form->textField($model,'Email_3',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Email_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiene_facebook'); ?>
		<?php echo $form->textField($model,'tiene_facebook',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'tiene_facebook'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreFacebook'); ?>
		<?php echo $form->textField($model,'nombreFacebook',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombreFacebook'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'urlFacebook'); ?>
		<?php echo $form->textField($model,'urlFacebook',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'urlFacebook'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiene_twitter'); ?>
		<?php echo $form->textField($model,'tiene_twitter',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'tiene_twitter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefonoTrabajo'); ?>
		<?php echo $form->textField($model,'telefonoTrabajo',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'telefonoTrabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefonoCasa'); ?>
		<?php echo $form->textField($model,'telefonoCasa',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'telefonoCasa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefonoCelular'); ?>
		<?php echo $form->textField($model,'telefonoCelular',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'telefonoCelular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccionActual'); ?>
		<?php echo $form->textField($model,'direccionActual',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'direccionActual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugarResidencia'); ?>
		<?php echo $form->textField($model,'lugarResidencia',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'lugarResidencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoCivil'); ?>
		<?php echo $form->textField($model,'estadoCivil',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'estadoCivil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conyuge'); ?>
		<?php echo $form->textField($model,'conyuge',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'conyuge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiene_conyuge_egresado'); ?>
		<?php echo $form->textField($model,'tiene_conyuge_egresado',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'tiene_conyuge_egresado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hermanosEgresados'); ?>
		<?php echo $form->textField($model,'hermanosEgresados',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'hermanosEgresados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hijoEgresado'); ?>
		<?php echo $form->textField($model,'hijoEgresado',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'hijoEgresado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->