<?php
/* @var $this ExAlumnosController */
/* @var $data ExAlumnos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyE')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyE), array('view', 'id'=>$data->keyE)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matricula')); ?>:</b>
	<?php echo CHtml::encode($data->matricula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellido_1')); ?>:</b>
	<?php echo CHtml::encode($data->Apellido_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_2')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_1')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_2')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('generacion')); ?>:</b>
	<?php echo CHtml::encode($data->generacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('vive')); ?>:</b>
	<?php echo CHtml::encode($data->vive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fechaNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudadNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->ciudadNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->estadoNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paisNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->paisNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('promedioCarrera')); ?>:</b>
	<?php echo CHtml::encode($data->promedioCarrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulado')); ?>:</b>
	<?php echo CHtml::encode($data->titulado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaTitulacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaTitulacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year_ceneval')); ?>:</b>
	<?php echo CHtml::encode($data->year_ceneval); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('puntos_ceneval')); ?>:</b>
	<?php echo CHtml::encode($data->puntos_ceneval); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiene_postgrado')); ?>:</b>
	<?php echo CHtml::encode($data->tiene_postgrado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoPostgrado')); ?>:</b>
	<?php echo CHtml::encode($data->tipoPostgrado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Especialidad_1')); ?>:</b>
	<?php echo CHtml::encode($data->Especialidad_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Especialidad_2')); ?>:</b>
	<?php echo CHtml::encode($data->Especialidad_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maestria')); ?>:</b>
	<?php echo CHtml::encode($data->maestria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('residencia_medica')); ?>:</b>
	<?php echo CHtml::encode($data->residencia_medica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paisActual')); ?>:</b>
	<?php echo CHtml::encode($data->paisActual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoActual')); ?>:</b>
	<?php echo CHtml::encode($data->estadoActual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudadActual')); ?>:</b>
	<?php echo CHtml::encode($data->ciudadActual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar_trabajo_actual')); ?>:</b>
	<?php echo CHtml::encode($data->lugar_trabajo_actual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('puestoTrabajo')); ?>:</b>
	<?php echo CHtml::encode($data->puestoTrabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiene_puesto_destacado')); ?>:</b>
	<?php echo CHtml::encode($data->tiene_puesto_destacado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('puestoDestacado')); ?>:</b>
	<?php echo CHtml::encode($data->puestoDestacado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email_1')); ?>:</b>
	<?php echo CHtml::encode($data->Email_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email_2')); ?>:</b>
	<?php echo CHtml::encode($data->Email_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email_3')); ?>:</b>
	<?php echo CHtml::encode($data->Email_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiene_facebook')); ?>:</b>
	<?php echo CHtml::encode($data->tiene_facebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreFacebook')); ?>:</b>
	<?php echo CHtml::encode($data->nombreFacebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('urlFacebook')); ?>:</b>
	<?php echo CHtml::encode($data->urlFacebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiene_twitter')); ?>:</b>
	<?php echo CHtml::encode($data->tiene_twitter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefonoTrabajo')); ?>:</b>
	<?php echo CHtml::encode($data->telefonoTrabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefonoCasa')); ?>:</b>
	<?php echo CHtml::encode($data->telefonoCasa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefonoCelular')); ?>:</b>
	<?php echo CHtml::encode($data->telefonoCelular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccionActual')); ?>:</b>
	<?php echo CHtml::encode($data->direccionActual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugarResidencia')); ?>:</b>
	<?php echo CHtml::encode($data->lugarResidencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoCivil')); ?>:</b>
	<?php echo CHtml::encode($data->estadoCivil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conyuge')); ?>:</b>
	<?php echo CHtml::encode($data->conyuge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiene_conyuge_egresado')); ?>:</b>
	<?php echo CHtml::encode($data->tiene_conyuge_egresado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hermanosEgresados')); ?>:</b>
	<?php echo CHtml::encode($data->hermanosEgresados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hijoEgresado')); ?>:</b>
	<?php echo CHtml::encode($data->hijoEgresado); ?>
	<br />

	*/ ?>

</div>