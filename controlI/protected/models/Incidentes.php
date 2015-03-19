<?php

/**
 * This is the model class for table "incidentes".
 *
 * The followings are the available columns in table 'incidentes':
 * @property integer $idIncidente
 * @property string $Descripcion
 * @property string $InicioFechaHora
 * @property string $Categoria
 * @property string $Estatus
 * @property string $Laboratorio
 * @property string $Asignado
 * @property string $Urgencia
 * @property string $SolucionFechaHora
 * @property string $ModificacionFechaHora
 * @property string $Equipo
 * @property string $Inmueble
 */
class Incidentes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'incidentes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Descripcion, InicioFechaHora, Categoria, Estatus, Laboratorio,  Urgencia, Equipo', 'required'),
			array('Descripcion, Categoria, Estatus, Laboratorio, Asignado, Urgencia, SolucionFechaHora, ModificacionFechaHora, Equipo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Inmueble','file', 'allowEmpty'=>false,
			                  'types'=>'png, jpg, jpeg, gif',
			                  'maxSize'=>array(1024 * 2000),
			                  'message'=>'Debes Seleccionar Foto'),
			array('idIncidente, Descripcion, InicioFechaHora, Categoria, Estatus, Laboratorio, Asignado, Urgencia, SolucionFechaHora, ModificacionFechaHora, Equipo, Inmueble', 'safe', 'on'=>'search'),
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
			'idIncidente' => 'ID',
			'Descripcion' => 'Descripcion',
			'InicioFechaHora' => 'Inicio',
			'Categoria' => 'Categoria',
			'Estatus' => 'Estatus',
			'Laboratorio' => 'Laboratorio',
			'Asignado' => 'Asignado',
			'Urgencia' => 'Urgencia',
			'SolucionFechaHora' => 'Solucion',
			'ModificacionFechaHora' => 'Modificacion',
			'Equipo' => 'Equipo',
			'Inmueble' => 'Foto',
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

		$criteria->compare('idIncidente',$this->idIncidente);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('InicioFechaHora',$this->InicioFechaHora,true);
		$criteria->compare('Categoria',$this->Categoria,true);
		$criteria->compare('Estatus',$this->Estatus,true);
		$criteria->compare('Laboratorio',$this->Laboratorio,true);
		$criteria->compare('Asignado',$this->Asignado,true);
		$criteria->compare('Urgencia',$this->Urgencia,true);
		$criteria->compare('SolucionFechaHora',$this->SolucionFechaHora,true);
		$criteria->compare('ModificacionFechaHora',$this->ModificacionFechaHora,true);
		$criteria->compare('Equipo',$this->Equipo,true);
		$criteria->compare('Inmueble',$this->Inmueble,true);

		$_SESSION['datos_filtrados'] = new CActiveDataProvider($this, array(
 		'criteria'=>$criteria,
		
		 'pagination'=>false,
 			));
			
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Incidentes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
