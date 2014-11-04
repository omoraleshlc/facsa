<?php
/* @var $this UmControlAlumnosController */
/* @var $model UmControlAlumnos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'um-control-alumnos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <table class="table table-condensed">
            <tr>
                <td>
                 <?php echo $form->labelEx($model,'Generacion Ej: 1970'); ?>
		<?php echo $form->textField($model,'Gen'); ?>
		<?php echo $form->error($model,'Gen'); ?>   
                </td>
                
                <td>
                   <?php echo $form->labelEx($model,'Vive?'); ?>
		<?php echo $form->textField($model,'vive',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'vive'); ?> 
                </td>
                
                
                <td>
		<?php echo $form->labelEx($model,'matricula'); ?>
		<?php echo $form->textField($model,'matricula'); ?>
		<?php echo $form->error($model,'matricula'); ?>                    
                </td>
            </tr>  
            
            <tr>
                <td>
		<?php echo $form->labelEx($model,'nombre1'); ?>
		<?php echo $form->textField($model,'nombre1',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'nombre1'); ?>                    

		<?php echo $form->labelEx($model,'nombre2'); ?>
		<?php echo $form->textField($model,'nombre2',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'nombre2'); ?>                    
                </td>   
                
                <td>
                <?php echo $form->labelEx($model,'apellidos1'); ?>
		<?php echo $form->textField($model,'apellidos1',array('size'=>24,'maxlength'=>24)); ?>
		<?php echo $form->error($model,'apellidos1'); ?>   
                </td>
                
                <td>
		<?php echo $form->labelEx($model,'apellidos2'); ?>
		<?php echo $form->textField($model,'apellidos2',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'apellidos2'); ?>                    
                </td>
            </tr>
            
            
            
            <tr>
                <td>
		<?php echo $form->labelEx($model,'Hermanos'); ?>
		<?php echo $form->textField($model,'Hermanos',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'Hermanos'); ?>                    
                </td>   
                
                <td>
		<?php echo $form->labelEx($model,'fechaNacimiento'); ?>
		<?php echo $form->textField($model,'fechaNacimiento',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fechaNacimiento'); ?>                    
                </td>
                
                <td>
		<?php echo $form->labelEx($model,'lugarNacimiento'); ?>
		<?php echo $form->textField($model,'lugarNacimiento',array('size'=>26,'maxlength'=>26)); ?>
		<?php echo $form->error($model,'lugarNacimiento'); ?>                    
                </td>
            </tr>
            
            
            
            <tr>
                <td>
       <?php echo $form->labelEx($model,'País de Nacimiento'); ?>
       <?php
             $departamento = new CDbCriteria;
             $departamento->order = 'name ASC';
       ?>
       <?php
             echo $form->dropDownList($model,'pais',CHtml::listData(CatPaises::model()->findAll($departamento),'num','name'),
                       array(
                           'ajax' => array(
                           'type' => 'POST',
                           'url' => CController::createUrl('CombosDependientes/dynamicMunicipios'),
                           'update' => '#CombosDependientes_codMunicipio'
                       ),'prompt' => 'Seleccione un País...'
                 )
             );
       ?>
       <?php //echo $form->error($model,'codDepartamento'); ?>                    
                </td>
                
                <td>
		<?php echo $form->labelEx($model,'Nacionalidad'); ?>
		<?php echo $form->textField($model,'Nacionalidad',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'Nacionalidad'); ?>                    
                </td>
                
                <td>
		<?php echo $form->labelEx($model,'Región'); ?>
		<?php echo $form->textField($model,'region',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'region'); ?>                    
                </td>
            </tr>
            
            
            <tr>
                <td>
		<?php echo $form->labelEx($model,'Estado Civil'); ?>
		<?php echo $form->textField($model,'Estadocivil',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Estadocivil'); ?>                    
                </td>
                
                
                <td>
		<?php echo $form->labelEx($model,'Conyuge'); ?>
		<?php echo $form->textField($model,'Conyuge',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Conyuge'); ?>                    
                </td>
                
                <td>
		<?php echo $form->labelEx($model,'Su Cónyuge es Ex Alumno?'); ?>
		<?php echo $form->textField($model,'ConyugeExaUM',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'ConyugeExaUM'); ?>                    
                </td>
            </tr>
            
            
            <tr>
                <td>
		<?php echo $form->labelEx($model,'Nombre en Facebook'); ?>
		<?php echo $form->textField($model,'NombreFacebook',array('size'=>27,'maxlength'=>27)); ?>
		<?php echo $form->error($model,'NombreFacebook'); ?>                    
                </td>
                
                <td>
		<?php echo $form->labelEx($model,'Direccion Web Facebook'); ?>
		<?php echo $form->textField($model,'URLFacebook',array('size'=>59,'maxlength'=>59)); ?>
		<?php echo $form->error($model,'URLFacebook'); ?>                    
                </td>
                
                <td>
		<?php echo $form->labelEx($model,'Puesto'); ?>
		<?php echo $form->textField($model,'Puesto',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'Puesto'); ?>                    
                </td>
            </tr>
            
            
            <tr>
                <td>
		<?php echo $form->labelEx($model,'vive en'); ?>
		<?php echo $form->textField($model,'viveEn',array('size'=>24,'maxlength'=>24)); ?>
		<?php echo $form->error($model,'viveEn'); ?>                    
                </td>
                
                <td>
		<?php echo $form->labelEx($model,'Ciudad'); ?>
		<?php echo $form->textField($model,'Ciudad',array('size'=>21,'maxlength'=>21)); ?>
		<?php echo $form->error($model,'Ciudad'); ?>                    
                </td>
                
                <td>
		<?php echo $form->labelEx($model,'Tiene algún postgrado?'); ?>
		<?php echo $form->textField($model,'Postgrado',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'Postgrado'); ?>                    
                </td>
            
            <tr>
                <td>
		<?php echo $form->labelEx($model,'Especialidad'); ?>
		<?php echo $form->textField($model,'Especialidad',array('size'=>37,'maxlength'=>37)); ?>
		<?php echo $form->error($model,'Especialidad'); ?>                    
                </td>
                
                <td>
		<?php echo $form->labelEx($model,'Subespecialidad'); ?>
		<?php echo $form->textField($model,'Subespecialidad',array('size'=>28,'maxlength'=>28)); ?>
		<?php echo $form->error($model,'Subespecialidad'); ?>                    
                </td>
                
                
                <td>
		<?php echo $form->labelEx($model,'Maestria en'); ?>
		<?php echo $form->textField($model,'Maestria',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Maestria'); ?>                    
                </td>
                
            </tr>
            
            
            <tr>
                <td>
		<?php echo $form->labelEx($model,'Residencia'); ?>
		<?php echo $form->textField($model,'Residencia',array('size'=>26,'maxlength'=>26)); ?>
		<?php echo $form->error($model,'Residencia'); ?>                    
                </td>
                
                <td>
		<?php echo $form->labelEx($model,'Twitter'); ?>
		<?php echo $form->textField($model,'Twitter',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Twitter'); ?>                    
                </td>
                
                <td>
		<?php echo $form->labelEx($model,'email1'); ?>
		<?php echo $form->textField($model,'email1',array('size'=>38,'maxlength'=>38)); ?>
		<?php echo $form->error($model,'email1'); ?>                    
                </td>
            </tr>
        
            
            <tr>
                <td>
		<?php echo $form->labelEx($model,'email2'); ?>
		<?php echo $form->textField($model,'email2',array('size'=>37,'maxlength'=>37)); ?>
		<?php echo $form->error($model,'email2'); ?>                    
                </td>
                
                <td>
		<?php echo $form->labelEx($model,'Teléfono de Casa'); ?>
		<?php echo $form->textField($model,'telCasa',array('size'=>17,'maxlength'=>17)); ?>
		<?php echo $form->error($model,'telCasa'); ?>                    
                </td>
                
                <td>
		<?php echo $form->labelEx($model,'Teléfono de Trabajo'); ?>
		<?php echo $form->textField($model,'telTrabajo',array('size'=>17,'maxlength'=>17)); ?>
		<?php echo $form->error($model,'telTrabajo'); ?>                    
                </td>
            </tr>
            
            
            <tr>
                <td>
		<?php echo $form->labelEx($model,'Teléfono Móvil'); ?>
		<?php echo $form->textField($model,'telCelular',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'telCelular'); ?>                    
                </td>
                
                <td>
		<?php echo $form->labelEx($model,'Ciudad donde reside actualmente'); ?>
		<?php echo $form->textField($model,'ciudadResidencia',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'ciudadResidencia'); ?>                    
                </td>
                
                <td>
		<?php echo $form->labelEx($model,'Dirección'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>66)); ?>
		<?php echo $form->error($model,'direccion'); ?>                    
                </td>
            </tr>
            
            
            
            <tr>
                <td>
		<?php echo $form->labelEx($model,'Trabajo'); ?>
		<?php echo $form->textField($model,'Trabajo',array('size'=>48,'maxlength'=>48)); ?>
		<?php echo $form->error($model,'Trabajo'); ?>                    
                </td>
                
                <td>
		<?php echo $form->labelEx($model,'Trabajo2'); ?>
		<?php echo $form->textField($model,'Trabajo2',array('size'=>42,'maxlength'=>42)); ?>
		<?php echo $form->error($model,'Trabajo2'); ?>                    
                </td>
                
                <td>
                	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>    
                </td>
            </tr>
        </table>
        

<h1>Yii CJuiDatePicker: Date Format</h1>
<script>
  $(function() {
    $( "#date-format" ).change(function() {
      $( "#datepicker-date-format" ).datepicker( "option", "dateFormat", $( this ).val() );
    });
  });
  </script>
<p>Format options:<br />
  <select id="date-format">
    <option value="mm/dd/yy">Default - mm/dd/yy</option>
    <option value="yy-mm-dd">ISO 8601 - yy-mm-dd</option>
    <option value="d M, y">Short - d M, y</option>
    <option value="d MM, y">Medium - d MM, y</option>
    <option value="DD, d MM, yy">Full - DD, d MM, yy</option>
    <option value="'day' d 'of' MM 'in the year' yy">With text - 'day' d 'of' MM 'in the year' yy</option>
  </select>
</p>
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'datepicker-date-format',    
    'value'=>date('d/m/Y'),
    'options'=>array(        
        'showButtonPanel'=>true,
        'dateFormat'=>'mm/dd/yy',//Date format 'mm/dd/yy','yy-mm-dd','d M, y','d MM, y','DD, d MM, yy'
    ),
    'htmlOptions'=>array(
        'style'=>''
    ),
));
?>


<?php $this->endWidget(); ?>

</div><!-- form -->