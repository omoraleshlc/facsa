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
	'enableAjaxValidation'=>TRUE,
   'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

	
   
    

    
    

  
    
    
    
    
    <h2>Lista de Variables</h2>

	<?php echo $form->errorSummary($model); ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    <?php echo CHtml::submitButton('Agregar/Actualizar',array('class'=>'btn btn-primary')); ?>
    <br>
    <h3><div class="success">Identificación</div></h3>
    
    <table class="table table-striped">
    <tr>
        
                <td>
                <?php //echo $form->labelEx($model,'apellidos1'); ?>
		<?php echo $form->textField($model,'apellidos1',array('size'=>24,'maxlength'=>24,'placeholder'=>'Apellidos1')); ?>
		<?php echo $form->error($model,'apellidos1'); ?>   
                </td>
                
                        <td>
		<?php //echo $form->labelEx($model,'apellidos2'); ?>
		<?php echo $form->textField($model,'apellidos2',array('size'=>12,'maxlength'=>12,'placeholder'=>'Apellidos2')); ?>
		<?php echo $form->error($model,'apellidos2'); ?>                    
                </td>
                
               <td>
		<?php //echo $form->labelEx($model,'matricula'); ?>
		<?php echo $form->textField($model,'matricula',array('size'=>12,'maxlength'=>12,'placeholder'=>'Matricula')); ?>
		<?php echo $form->error($model,'matricula'); ?>                    
                </td>

   
    </tr>
    
    
    <tr>
        <td>
    <?php //echo $form->labelEx($model,'nombre1'); ?>
		<?php echo $form->textField($model,'nombre1',array('size'=>13,'maxlength'=>13,'placeholder'=>'Nombre1')); ?>
		<?php echo $form->error($model,'nombre1'); ?>    
        </td>
        
        <td>
       		<?php //echo $form->labelEx($model,'nombre2'); ?>
		<?php echo $form->textField($model,'nombre2',array('size'=>19,'maxlength'=>19,'placeholder'=>'Nombre2')); ?>
		<?php echo $form->error($model,'nombre2'); ?>     
        </td>
        <td></td>
    </tr>
    
    
    <tr>
                        <td>
                 <?php echo $form->labelEx($model,'Generacion Ej: 1970'); ?>
		<?php echo $form->textField($model,'Gen'); ?>
		<?php echo $form->error($model,'Gen'); ?>   
                </td>
                
               <td>
               <?php //echo $form->labelEx($model,'Vive?'); ?>     
                   <?php //echo $form->textField($model,'Gen',array("type"=>"radio",'name'=>'vive','value'=>'Si','class'=>'radio','checked'=>'')); ?>
                   <?php //echo $form->textField($model,'Gen',array("type"=>"radio",'name'=>'vive','value'=>'No','class'=>'radio')); ?>
                                
               <?php //echo $form->error($model,'vive'); ?> 
                     
                   

        <?php echo $form->labelEx($model,'vive'); ?>
        <?php echo $form->radioButtonList($model,'vive',array('vive'=>'Si')); ?>
        
        <?php echo $form->radioButtonList($model,'vive',array('vive'=>'No')); ?>
        <?php echo $form->error($model,'vive'); ?>
                  
                </td>
                <td></td>
    </tr>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     <tr>
         <td><?php echo $form->labelEx($model,'fechaNacimiento'); ?>               </td>
                
                <td>


	       
		     
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'model'=>$model,
    'name'=>'UmControlAlumnos[fechaNacimiento]',
    'value'=>$model->fechaNacimiento,
   
    
    //'value'=>date('Y-m-d'),
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
                
                <td>
		<?php //echo $form->labelEx($model,'lugarNacimiento'); ?>
		<?php echo $form->textField($model,'lugarNacimiento',array('size'=>26,'maxlength'=>26,'placeholder'=>'Lugar de Nacimiento')); ?>
		<?php echo $form->error($model,'lugarNacimiento'); ?>                    
                </td>
                
                
            </tr>
            
            
            <tr>
<td>
       <?php //echo $form->labelEx($model,'País de Nacimiento'); ?>
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
                       ),'prompt' => 'País de Nacimiento...'
                 )
             );
       ?>
       <?php //echo $form->error($model,'codDepartamento'); ?>                    
</td>
                
                <td>
		<?php //echo $form->labelEx($model,'Nacionalidad'); ?>
		<?php echo $form->textField($model,'Nacionalidad',array('size'=>14,'maxlength'=>14,'placeholder'=>'Nacionalidad')); ?>
		<?php echo $form->error($model,'Nacionalidad'); ?>                    
                </td>
                
                <td>
		<?php //echo $form->labelEx($model,'Región'); ?>
		<?php echo $form->textField($model,'region',array('size'=>14,'maxlength'=>14,'placeholder'=>'region')); ?>
		<?php echo $form->error($model,'region'); ?>                    
                </td>
              
            </tr>
            
            
            
            
            
            
            <tr>
                  <td>
		<?php //echo $form->labelEx($model,'Hermanos'); ?>
		<?php echo $form->textField($model,'Hermanos',array('size'=>1,'maxlength'=>1,'placeholder'=>'Hermanos')); ?>
		<?php echo $form->error($model,'Hermanos'); ?>                    
                </td> 
                <td></td>
                <td></td>
            </tr>            
            </table>
            
            
            
            
            
            
            
            
            
            
            
            
            
    <br>
            
            
            
         <h3>Académicas</h3>   
         <table class="table table-striped">
             <tr>
                <td>
		<?php //echo $form->labelEx($model,'Promedio'); ?>
		<?php echo $form->textField($model,'promedioCarrera',array('size'=>27,'maxlength'=>27,'placeholder'=>'Promedio Carrera')); ?>
		<?php echo $form->error($model,'promedioCarrera'); ?>                    
                </td>

               <td>
               <?php echo $form->labelEx($model,'Titulado?'); ?>                    
                   <input type="radio" name="titulado" class="radio" value="si" checked="">Si
               <input type="radio" name="titulado"  class="radio" value="no">No                    
               <?php echo $form->error($model,'vive'); ?> 
                              
                </td> 
                
                
                
                <td>
                    		     
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
                
                
                
                
                
             </tr>
             
             
             <tr>
                 <td>
                     <?php echo $form->labelEx($model,'Año de CENEVAL'); ?>
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'yearceneval',    
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
	<?php echo $form->error($model,'yearceneval'); ?>                       
                 </td>
                 
                 <td>
                <td>
		<?php echo $form->labelEx($model,'Puntos Obtenidos'); ?>
		<?php echo $form->textField($model,'puntosCeneval',array('size'=>27,'maxlength'=>27)); ?>
		<?php echo $form->error($model,'puntosCeneval'); ?>                    
                </td>                     
                 </td>
                 
                 <td>
                     
                 </td>
             </tr>
         </table>
        
        
    
    
         
         
         
         
         
         
         
         
         
         <br>         
         <h3><div class="success">Postgrado</div></h3>  
        <table class="table table-striped">

            <tr>
                <td>
		<?php echo $form->labelEx($model,'Tiene algún postgrado?'); ?>
		<?php echo $form->textField($model,'Postgrado',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'Postgrado'); ?>                    
                </td>            
 
                
                <td>
		<?php echo $form->labelEx($model,'Tipo de postgrado'); ?>
		<?php echo $form->textField($model,'tipoPostgrado',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'tipoPostgrado'); ?>                    
                </td>                   
           
                <td></td>
            </tr>
            
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
                <td></td>
            </tr>
            
            <tr>
                <td>
		<?php echo $form->labelEx($model,'Maestria en'); ?>
		<?php echo $form->textField($model,'Maestria',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Maestria'); ?>                    
                </td>
                
                <td>
		<?php echo $form->labelEx($model,'Residencia'); ?>
		<?php echo $form->textField($model,'Residencia',array('size'=>26,'maxlength'=>26)); ?>
		<?php echo $form->error($model,'Residencia'); ?>                    
                </td>
                
                <td></td>
                
            </tr>
        </table>
            
            
         
         
         
                  <br>         
         <h3><div class="success">Laborales Actuales</div></h3>    
            
         <table class="table table-striped">
          
         <tr>
              <td>
       <?php echo $form->labelEx($model,'País Actual'); ?>
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
		<?php echo $form->labelEx($model,'Estado Actual'); ?>
		<?php echo $form->textField($model,'estadoActual',array('size'=>27,'maxlength'=>27)); ?>
		<?php echo $form->error($model,'estadoActual'); ?>                    
                </td>                
             
                
                <td>
		<?php echo $form->labelEx($model,'Ciudad Actual'); ?>
		<?php echo $form->textField($model,'ciudadActual',array('size'=>27,'maxlength'=>27)); ?>
		<?php echo $form->error($model,'ciudadActual'); ?>                    
                </td>                  
         </tr>   
            
         
         <tr>
                <td>
		<?php echo $form->labelEx($model,'Institución Actual'); ?>
		<?php echo $form->textField($model,'institucionActual',array('size'=>27,'maxlength'=>27)); ?>
		<?php echo $form->error($model,'institucionActual'); ?>                    
                </td>  
                
                
                <td>
		<?php echo $form->labelEx($model,'Puesto que ocupa'); ?>
		<?php echo $form->textField($model,'puestoActual',array('size'=>27,'maxlength'=>27)); ?>
		<?php echo $form->error($model,'puestoActual'); ?>                    
                </td>   
                <td></td>
         </tr>
         
         <tr>
                <td>
		<?php echo $form->labelEx($model,'¿Puesto destacado?'); ?>
		<?php echo $form->textField($model,'puestoDestacado',array('size'=>27,'maxlength'=>27)); ?>
		<?php echo $form->error($model,'puestoDestacado'); ?>                    
                </td> 
                
                <td>
		<?php echo $form->labelEx($model,'¿Cual Puesto destacado?'); ?>
		<?php echo $form->textField($model,'cualPuestoDestacado',array('size'=>27,'maxlength'=>27)); ?>
		<?php echo $form->error($model,'cualPuestoDestacado'); ?>                    
                </td>  
                
                <td></td>
         </tr>
         </table>
         
         
         
         
         
         
         
         
         
         
         
         
         
         <br>
         <h3><div class="success">Comunicación</div></h3>    
            <table class="table table-striped">
                
                
                
                
                
                <tr>
                    
                <td>
		<?php echo $form->labelEx($model,'email1'); ?>
		<?php echo $form->textField($model,'email1',array('size'=>38,'maxlength'=>38)); ?>
		<?php echo $form->error($model,'email1'); ?>                    
                </td>                    
                    
                <td>
		<?php echo $form->labelEx($model,'email2'); ?>
		<?php echo $form->textField($model,'email2',array('size'=>37,'maxlength'=>37)); ?>
		<?php echo $form->error($model,'email2'); ?>                    
                </td>
                
                <td></td>                

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
		<?php echo $form->labelEx($model,'Twitter'); ?>
		<?php echo $form->textField($model,'Twitter',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Twitter'); ?>                    
                </td>                

            </tr>
            
            
            
           
            <tr>

                
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
                
                <td>
		<?php echo $form->labelEx($model,'Teléfono Móvil'); ?>
		<?php echo $form->textField($model,'telCelular',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'telCelular'); ?>                    
                </td>
            </tr>            
            
            
            <tr>
                <td>
		<?php echo $form->labelEx($model,'Dirección'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>66)); ?>
		<?php echo $form->error($model,'direccion'); ?>                    
                </td>
                <td></td>
                <td></td>
            </tr>
            </table>
            
            
            
            
            
            
         <br>         
         <h3><div class="success">Sociales</div></h3>    
            <table class="table table-striped">
            <tr>
                <td>
		<?php echo $form->labelEx($model,'Estado Civil'); ?>
		<?php //echo $form->textField($model,'Estadocivil',array('size'=>10,'maxlength'=>10)); ?>
		<?php //echo $form->error($model,'Estadocivil'); ?>     
                    
<?php echo $form->dropDownList($model,'Estadocivil',array("Casado"=>"Casado","Soltero"=>"Soltero"),array('empty'=>'Estatus Social')); ?>                    
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
		<?php echo $form->labelEx($model,'¿Hermanos Egresados?'); ?>
		<?php echo $form->textField($model,'hermanosEgresados',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'hermanosEgresados'); ?>                    
                </td>
                
                                 <td>
		<?php echo $form->labelEx($model,'¿Hijo de Egresado?'); ?>
		<?php echo $form->textField($model,'Conyuge',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Conyuge'); ?>                    
                </td>
                
                <td></td>
            </tr>
            </table>
            
        


    
<?php echo CHtml::submitButton('Agregar',array('class'=>'btn btn-primary')); ?>
    
    
    
    
    
    
    
    
 <!--subid imagen -->
 <script>
// this script executes when click on upload images link
    function uploadImage() {
        $("#forum_image").click();
        return false;
}
</script>
 
<script type="text/javascript">
// this script for collecting the form data and pass to the controller action and doing the on success validations
function send(){
    var formData = new FormData($("#post-form")[0]);
    $.ajax({
        url: '<?php echo Yii::app()->createUrl("forumPost/uploadPost"); ?>',
        type: 'POST',
        data: formData,
        datatype:'json',
        // async: false,
        beforeSend: function() {
            // do some loading options
        },
        success: function (data) {
            // on success do some validation or refresh the content div to display the uploaded images 
            jQuery("#list-of-post").load("<?php echo Yii::app()->createUrl('//forumPost/forumPostDisplay'); ?>");
        },
 
        complete: function() {
            // success alerts
        },
 
        error: function (data) {
            alert("There may a error on uploading. Try again later";)
        },
        cache: false,
        contentType: false,
        processData: false
    });
 
    return false;
}
</script>
<!-- cierra suibid imagen -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

<?php $this->endWidget(); ?>

</div><!-- form -->













