<?php
   /* $form=$this->beginWidget('CActiveForm', array(
        'id'=>'post-form',
        'enableAjaxValidation' => FALSE,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));*/
    
    $this->widget('ext.xphoto.XPhoto',array(
    'model'=>$model,
    'attribute'=>'user_photo',
));


    ?>