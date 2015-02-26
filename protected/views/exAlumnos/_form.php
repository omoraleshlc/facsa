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
)); 


?>
    
    
    
    


    <br><br>
    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
    
        <?php echo CHtml::submitButton('Agregar/Actualizar',array('class'=>'btn btn-primary')); ?>
    
     


	<?php echo $form->errorSummary($model); ?>

        
           <br>   <br>   <br>
      <h2>Lista de Variables</h2>
      
    <h3><div class="primary">Identificación</div></h3>
            <table class="table table-bordered table-striped">
                <tr>
        
                <td>
                <?php echo $form->labelEx($model,'Nombre_1'); ?>
		<?php echo $form->textField($model,'Nombre_1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Nombre_1'); ?>
                </td>
                    
                    
                
                <td>
		<?php echo $form->labelEx($model,'Nombre_2'); ?>
		<?php echo $form->textField($model,'Nombre_2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Nombre_2'); ?>

                </td>                
                
                <td>
                <?php echo $form->labelEx($model,'Apellido_1'); ?>
		<?php echo $form->textField($model,'Apellido_1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Apellido_1'); ?>
                </td>
                
                
                <td>
		<?php echo $form->labelEx($model,'apellido_2'); ?>
		<?php echo $form->textField($model,'apellido_2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'apellido_2'); ?>
                </td>
                    




    </tr>
                    
                    
                    
    <tr>
        
        
        <td>
		<?php echo $form->labelEx($model,'matricula'); ?>
		<?php echo $form->textField($model,'matricula'); ?>
		<?php echo $form->error($model,'matricula'); ?>
        </td>        
        
        
        
        

        <td>
		<?php echo $form->labelEx($model,'generacion'); ?>
		<?php echo $form->textField($model,'generacion'); ?>
		<?php echo $form->error($model,'generacion'); ?>
        </td>

	
   
        <td>
<?php echo $form->labelEx($model,'vive (Si/No)'); ?>
  
        <?php echo $form->checkBox($model,'vive',array('No'=>'No')); ?>
        <?php echo $form->error($model,'vive'); ?>            
            
        </td>
        <td></td>
    </tr>
        

    
    <tr>
        <td>
		<?php echo $form->labelEx($model,'ciudadNacimiento'); ?>
		<?php echo $form->textField($model,'ciudadNacimiento',array('size'=>26,'maxlength'=>26,'placeholder'=>'')); ?>
		<?php echo $form->error($model,'ciudadNacimiento'); ?>    
        </td>

        <td>
		<?php echo $form->labelEx($model,'estadoNacimiento'); ?>
		<?php echo $form->textField($model,'estadoNacimiento',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'estadoNacimiento'); ?>
        </td>

       
            
<td>
       <?php echo $form->labelEx($model,'País de Nacimiento'); ?>
       <?php
             $departamento = new CDbCriteria;
             $departamento->order = 'name ASC';
       ?>
       <?php
             echo $form->dropDownList($model,'paisNacimiento',CHtml::listData(CatPaises::model()->findAll($departamento),'num','name'),
                       array(
                           'ajax' => array(
                           'type' => 'POST',
                           'url' => CController::createUrl('CombosDependientes/dynamicMunicipios'),
                           'update' => '#CombosDependientes_codMunicipio'
                       ),'prompt' => 'País de Nacimiento...'
                 )
             );
       ?>
       <?php //echo $form->error($model,'codDepartamento'); ?>                    
</td>



        </td>
<td>
		<?php echo $form->labelEx($model,'fechaNacimiento'); ?>         
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'model'=>$model,
    'name'=>'UmControlAlumnos[fechaNacimiento]',
    'value'=>$model->fechaNacimiento,
   
    
    'value'=>date('d-m-Y'),
    'options'=>array(        
        'showButtonPanel'=>true,
        'dateFormat'=>'yy-mm-dd',//Date format 'mm/dd/yy','yy-mm-dd','d M, y','d MM, y','DD, d MM, yy'
    ),
    'htmlOptions'=>array(
        'style'=>''
    ),
));
?>
	<?php echo $form->error($model,'fechaNacimiento'); ?>  
        </td>
            </tr>
            </table>   
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
                   
    <br>
            
            
            
         <h3>Académicas</h3>   
         <table class="table table-bordered table-striped">
             <tr>
             <td>
             	<?php echo $form->labelEx($model,'promedioCarrera'); ?>
		<?php echo $form->textField($model,'promedioCarrera',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'promedioCarrera'); ?>    
             </td>
        
             <td>

		<?php echo $form->labelEx($model,'titulado'); ?>
		<?php echo $form->textField($model,'titulado',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'titulado'); ?>
	                
             </td>
             
             
             <td>
                 <?php echo $form->labelEx($model,'Fecha Titulación'); ?>
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'fechaTitulacion',    
    'value'=>date('Y-m-d'),
    'options'=>array(        
        'showButtonPanel'=>true,
        'dateFormat'=>'yy-mm-dd',//Date format 'mm/dd/yy','yy-mm-dd','d M, y','d MM, y','DD, d MM, yy'
    ),
    'htmlOptions'=>array(
        'style'=>''
    ),
));
?>
	<?php echo $form->error($model,'fechaTitulacion'); ?>  
	
         </td>
         
	<td>
		<?php echo $form->labelEx($model,'Año Ceneval'); ?>
		<?php echo $form->textField($model,'year_ceneval',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'year_ceneval'); ?>
	</td>         
         
         
             </tr>
             
             
             
             
             <tr>
                 


	<td>
		<?php echo $form->labelEx($model,'puntos_ceneval'); ?>
		<?php echo $form->textField($model,'puntos_ceneval',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'puntos_ceneval'); ?>
	</td>

        
	<td>
		<?php echo $form->labelEx($model,'tiene_postgrado'); ?>
		<?php echo $form->textField($model,'tiene_postgrado',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'tiene_postgrado'); ?>
	</td>

        
        
	<td>
		<?php echo $form->labelEx($model,'tipoPostgrado'); ?>
		<?php echo $form->textField($model,'tipoPostgrado'); ?>
		<?php echo $form->error($model,'tipoPostgrado'); ?>
	</td>               
                 
        <td></td>                 
             </tr>
             
             
             
             
             
             <tr>
                 
	<td>
		<?php echo $form->labelEx($model,'Especialidad_1'); ?>
		<?php echo $form->textField($model,'Especialidad_1',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Especialidad_1'); ?>
	</td>

	<td>
		<?php echo $form->labelEx($model,'Especialidad_2'); ?>
		<?php echo $form->textField($model,'Especialidad_2',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Especialidad_2'); ?>
	</td>

        
        
	<td>
		<?php echo $form->labelEx($model,'maestria'); ?>
		<?php echo $form->textField($model,'maestria',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'maestria'); ?>
	</td>

        
	<td>
		<?php echo $form->labelEx($model,'residencia_medica'); ?>
		<?php echo $form->textField($model,'residencia_medica',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'residencia_medica'); ?>
	</td>                 
             </tr>
         </table>
         
         
         



          <br>         
         <h3><div class="success">Laborales Actuales</div></h3>    
            
         <table class="table table-bordered table-striped">
             
             <tr>
                 <td> 
       <?php echo $form->labelEx($model,'País de Residencia Actual'); ?>
       <?php
             $departamento = new CDbCriteria;
             $departamento->order = 'name ASC';
       ?>
       <?php
             echo $form->dropDownList($model,'paisActual',CHtml::listData(CatPaises::model()->findAll($departamento),'num','name'),
                       array(
                           'ajax' => array(
                           'type' => 'POST',
                           'url' => CController::createUrl('CombosDependientes/dynamicMunicipios'),
                           'update' => '#CombosDependientes_codMunicipio'
                       ),'prompt' => 'País Actual...'
                 )
             );
       ?>
       <?php //echo $form->error($model,'codDepartamento'); ?>  
	</td>

	<td>
		<?php echo $form->labelEx($model,'estadoActual'); ?>
		<?php echo $form->textField($model,'estadoActual',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'estadoActual'); ?>
	</td>

	<td>
		<?php echo $form->labelEx($model,'ciudadActual'); ?>
		<?php echo $form->textField($model,'ciudadActual',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ciudadActual'); ?>
	</td>

	<td>
		<?php echo $form->labelEx($model,'lugar_trabajo_actual'); ?>
		<?php echo $form->textField($model,'lugar_trabajo_actual',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'lugar_trabajo_actual'); ?>
	</td>                 
             </tr>
             
             
             
             <tr>
<td>
		<?php echo $form->labelEx($model,'puestoTrabajo'); ?>
		<?php echo $form->textField($model,'puestoTrabajo',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'puestoTrabajo'); ?>
	</td>

	<td>
		<?php echo $form->labelEx($model,'tiene_puesto_destacado'); ?>
		<?php echo $form->textField($model,'tiene_puesto_destacado',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'tiene_puesto_destacado'); ?>
	</td>

	<td>
		<?php echo $form->labelEx($model,'puestoDestacado'); ?>
		<?php echo $form->textField($model,'puestoDestacado',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'puestoDestacado'); ?>
	</td>
             <td></td>             
                 
             </tr>             
             
         </table>



	

	
  <br>         
         <h3><div class="success">Comunicación</div></h3>   
         
         <table class="table table-bordered table-striped">
             <tr>
<td>
		<?php echo $form->labelEx($model,'Email_1'); ?>
		<?php echo $form->textField($model,'Email_1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Email_1'); ?>
	</td>

	<td>
		<?php echo $form->labelEx($model,'Email_2'); ?>
		<?php echo $form->textField($model,'Email_2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Email_2'); ?>
	</td>

        <td>
		<?php echo $form->labelEx($model,'Email_3'); ?>
		<?php echo $form->textField($model,'Email_3',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Email_3'); ?>
            </td>

	<td>
		<?php echo $form->labelEx($model,'tiene_facebook'); ?>
		<?php echo $form->textField($model,'tiene_facebook',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'tiene_facebook'); ?>
	</td>             
         </tr>     
        
        
        
         
         <tr>
             
<td>
		<?php echo $form->labelEx($model,'nombreFacebook'); ?>
		<?php echo $form->textField($model,'nombreFacebook',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombreFacebook'); ?>
	</td>

	<td>
		<?php echo $form->labelEx($model,'urlFacebook'); ?>
		<?php echo $form->textField($model,'urlFacebook',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'urlFacebook'); ?>
	</td>

	<td>
		<?php echo $form->labelEx($model,'tiene_twitter'); ?>
		<?php echo $form->textField($model,'tiene_twitter',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'tiene_twitter'); ?>
	</td>

	<td>
		<?php echo $form->labelEx($model,'telefonoTrabajo'); ?>
		<?php echo $form->textField($model,'telefonoTrabajo',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'telefonoTrabajo'); ?>
	</td>
             
             
             
         </tr>         
         
         
         
         
         
         
         <tr>
             
	<td>
		<?php echo $form->labelEx($model,'telefonoCasa'); ?>
		<?php echo $form->textField($model,'telefonoCasa',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'telefonoCasa'); ?>
        </td>

	<td>
		<?php echo $form->labelEx($model,'telefonoCelular'); ?>
		<?php echo $form->textField($model,'telefonoCelular',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'telefonoCelular'); ?>
        </td>

	<td>
		<?php echo $form->labelEx($model,'direccionActual'); ?>
		<?php echo $form->textField($model,'direccionActual',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'direccionActual'); ?>
	</td>

	<td>
		<?php echo $form->labelEx($model,'lugarResidencia'); ?>
		<?php echo $form->textField($model,'lugarResidencia',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'lugarResidencia'); ?>
	</td>             
             
         </tr>         
             
         </table>
         
         
         
         
         
	

	

         
         
         
         
         
         
         
         
         
         <br>         
         <h3><div class="success">Sociales</div></h3>    
            <table class="table table-bordered table-striped">
            <tr>
                
                <td>
		<?php echo $form->labelEx($model,'Estado Civil'); ?>
		<?php //echo $form->textField($model,'Estadocivil',array('size'=>10,'maxlength'=>10)); ?>
		<?php //echo $form->error($model,'Estadocivil'); ?>     
                    
<?php echo $form->dropDownList($model,'estadoCivil',array("Casado"=>"Casado","Soltero"=>"Soltero"),array('empty'=>'Escoja')); ?>                    
                </td>

	<td>
		<?php echo $form->labelEx($model,'cónyuge'); ?>
		<?php echo $form->textField($model,'conyuge',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'conyuge'); ?>
	</td>

	<td>
		<?php echo $form->labelEx($model,'tiene_conyuge_egresado'); ?>
		<?php echo $form->textField($model,'tiene_conyuge_egresado',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'tiene_conyuge_egresado'); ?>
	</td>

	<td>
		<?php echo $form->labelEx($model,'hermanosEgresados'); ?>
		<?php echo $form->textField($model,'hermanosEgresados',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'hermanosEgresados'); ?>
	</td>
                      
                
            </tr>
            
            
            <tr>
                <td>

		<?php echo $form->labelEx($model,'hijoEgresado'); ?>
		<?php echo $form->textField($model,'hijoEgresado',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'hijoEgresado'); ?>
	                    
                </td>
                <td></td>                
                <td></td>                
                <td></td>                
                
            </tr>            
            
            
            
            </table>
            
            

	
	

	    <?php echo CHtml::submitButton('Agregar/Actualizar',array('class'=>'btn btn-primary')); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->
