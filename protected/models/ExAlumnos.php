<?php

/**
 * This is the model class for table "ex_alumnos".
 *
 * The followings are the available columns in table 'ex_alumnos':
 * @property integer $keyE
 * @property integer $matricula
 * @property string $Apellido_1
 * @property string $apellido_2
 * @property string $Nombre_1
 * @property string $Nombre_2
 * @property integer $generacion
 * @property string $vive
 * @property string $fechaNacimiento
 * @property string $ciudadNacimiento
 * @property string $estadoNacimiento
 * @property string $paisNacimiento
 * @property string $promedioCarrera
 * @property string $titulado
 * @property string $fechaTitulacion
 * @property string $year_ceneval
 * @property string $puntos_ceneval
 * @property string $tiene_postgrado
 * @property integer $tipoPostgrado
 * @property string $Especialidad_1
 * @property string $Especialidad_2
 * @property string $maestria
 * @property string $residencia_medica
 * @property string $paisActual
 * @property string $estadoActual
 * @property string $ciudadActual
 * @property string $lugar_trabajo_actual
 * @property string $puestoTrabajo
 * @property string $tiene_puesto_destacado
 * @property string $puestoDestacado
 * @property string $Email_1
 * @property string $Email_2
 * @property string $Email_3
 * @property string $tiene_facebook
 * @property string $nombreFacebook
 * @property string $urlFacebook
 * @property string $tiene_twitter
 * @property string $telefonoTrabajo
 * @property string $telefonoCasa
 * @property string $telefonoCelular
 * @property string $direccionActual
 * @property string $lugarResidencia
 * @property string $estadoCivil
 * @property string $conyuge
 * @property string $tiene_conyuge_egresado
 * @property string $hermanosEgresados
 * @property string $hijoEgresado
 */
class ExAlumnos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ex_alumnos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('matricula, Nombre_1,Apellido_1, generacion', 'required'),
			array('matricula, generacion, tipoPostgrado', 'numerical', 'integerOnly'=>true),
			array('Apellido_1, apellido_2, paisNacimiento, maestria, Email_1, Email_2, Email_3, urlFacebook', 'length', 'max'=>100),
			array('Nombre_1, Nombre_2, residencia_medica, nombreFacebook, estadoCivil, conyuge', 'length', 'max'=>50),
			array('vive, titulado, tiene_postgrado, tiene_puesto_destacado, tiene_facebook, tiene_twitter, tiene_conyuge_egresado, hijoEgresado', 'length', 'max'=>2),
			array('fechaNacimiento, fechaTitulacion, telefonoTrabajo, telefonoCasa, telefonoCelular', 'length', 'max'=>30),
			array('ciudadNacimiento, estadoNacimiento, Especialidad_1, Especialidad_2, paisActual, estadoActual, ciudadActual, lugar_trabajo_actual, puestoTrabajo, puestoDestacado, direccionActual, lugarResidencia, hermanosEgresados', 'length', 'max'=>200),
			array('promedioCarrera', 'length', 'max'=>10),
			array('year_ceneval', 'length', 'max'=>255),
			array('puntos_ceneval', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array(' matricula, Apellido_1, apellido_2, Nombre_1, Nombre_2', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'keyE' => 'Key E',
			'matricula' => 'Matrícula',
			'Apellido_1' => 'Apellido 1',
			'apellido_2' => 'Apellido 2',
			'Nombre_1' => 'Nombre 1',
			'Nombre_2' => 'Nombre 2',
			'generacion' => 'Generacion',
			'vive' => 'Vive',
			'fechaNacimiento' => 'Fecha Nacimiento',
			'ciudadNacimiento' => 'Ciudad Nacimiento',
			'estadoNacimiento' => 'Estado Nacimiento',
			'paisNacimiento' => 'Pais Nacimiento',
			'promedioCarrera' => 'Promedio Carrera',
			'titulado' => 'Titulado',
			'fechaTitulacion' => 'Fecha Titulacion',
			'year_ceneval' => 'Year Ceneval',
			'puntos_ceneval' => 'Puntos Ceneval',
			'tiene_postgrado' => 'Tiene Postgrado',
			'tipoPostgrado' => 'Tipo Postgrado',
			'Especialidad_1' => 'Especialidad 1',
			'Especialidad_2' => 'Especialidad 2',
			'maestria' => 'Maestria',
			'residencia_medica' => 'Residencia Medica',
			'paisActual' => 'Pais Actual',
			'estadoActual' => 'Estado Actual',
			'ciudadActual' => 'Ciudad Actual',
			'lugar_trabajo_actual' => 'Lugar Trabajo Actual',
			'puestoTrabajo' => 'Puesto Trabajo',
			'tiene_puesto_destacado' => 'Tiene Puesto Destacado',
			'puestoDestacado' => 'Puesto Destacado',
			'Email_1' => 'Email 1',
			'Email_2' => 'Email 2',
			'Email_3' => 'Email 3',
			'tiene_facebook' => 'Tiene Facebook',
			'nombreFacebook' => 'Nombre Facebook',
			'urlFacebook' => 'Url Facebook',
			'tiene_twitter' => 'Tiene Twitter',
			'telefonoTrabajo' => 'Telefono Trabajo',
			'telefonoCasa' => 'Telefono Casa',
			'telefonoCelular' => 'Telefono Celular',
			'direccionActual' => 'Direccion Actual',
			'lugarResidencia' => 'Lugar Residencia',
			'estadoCivil' => 'Estado Civil',
			'conyuge' => 'Conyuge',
			'tiene_conyuge_egresado' => 'Tiene Conyuge Egresado',
			'hermanosEgresados' => 'Hermanos Egresados',
			'hijoEgresado' => 'Hijo Egresado',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		
		$criteria->compare('matricula',$this->matricula);
		$criteria->compare('Apellido_1',$this->Apellido_1,true);
		$criteria->compare('apellido_2',$this->apellido_2,true);
		$criteria->compare('Nombre_1',$this->Nombre_1,true);
		$criteria->compare('Nombre_2',$this->Nombre_2,true);
		$criteria->compare('generacion',$this->generacion);
		/*$criteria->compare('vive',$this->vive,true);
		$criteria->compare('fechaNacimiento',$this->fechaNacimiento,true);
		$criteria->compare('ciudadNacimiento',$this->ciudadNacimiento,true);
		$criteria->compare('estadoNacimiento',$this->estadoNacimiento,true);
		$criteria->compare('paisNacimiento',$this->paisNacimiento,true);
		$criteria->compare('promedioCarrera',$this->promedioCarrera,true);
		$criteria->compare('titulado',$this->titulado,true);
		$criteria->compare('fechaTitulacion',$this->fechaTitulacion,true);
		$criteria->compare('year_ceneval',$this->year_ceneval,true);
		$criteria->compare('puntos_ceneval',$this->puntos_ceneval,true);
		$criteria->compare('tiene_postgrado',$this->tiene_postgrado,true);
		$criteria->compare('tipoPostgrado',$this->tipoPostgrado);
		$criteria->compare('Especialidad_1',$this->Especialidad_1,true);
		$criteria->compare('Especialidad_2',$this->Especialidad_2,true);
		$criteria->compare('maestria',$this->maestria,true);
		$criteria->compare('residencia_medica',$this->residencia_medica,true);
		$criteria->compare('paisActual',$this->paisActual,true);
		$criteria->compare('estadoActual',$this->estadoActual,true);
		$criteria->compare('ciudadActual',$this->ciudadActual,true);
		$criteria->compare('lugar_trabajo_actual',$this->lugar_trabajo_actual,true);
		$criteria->compare('puestoTrabajo',$this->puestoTrabajo,true);
		$criteria->compare('tiene_puesto_destacado',$this->tiene_puesto_destacado,true);
		$criteria->compare('puestoDestacado',$this->puestoDestacado,true);
		$criteria->compare('Email_1',$this->Email_1,true);
		$criteria->compare('Email_2',$this->Email_2,true);
		$criteria->compare('Email_3',$this->Email_3,true);
		$criteria->compare('tiene_facebook',$this->tiene_facebook,true);
		$criteria->compare('nombreFacebook',$this->nombreFacebook,true);
		$criteria->compare('urlFacebook',$this->urlFacebook,true);
		$criteria->compare('tiene_twitter',$this->tiene_twitter,true);
		$criteria->compare('telefonoTrabajo',$this->telefonoTrabajo,true);
		$criteria->compare('telefonoCasa',$this->telefonoCasa,true);
		$criteria->compare('telefonoCelular',$this->telefonoCelular,true);
		$criteria->compare('direccionActual',$this->direccionActual,true);
		$criteria->compare('lugarResidencia',$this->lugarResidencia,true);
		$criteria->compare('estadoCivil',$this->estadoCivil,true);
		$criteria->compare('conyuge',$this->conyuge,true);
		$criteria->compare('tiene_conyuge_egresado',$this->tiene_conyuge_egresado,true);
		$criteria->compare('hermanosEgresados',$this->hermanosEgresados,true);
		$criteria->compare('hijoEgresado',$this->hijoEgresado,true);*/

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ExAlumnos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
