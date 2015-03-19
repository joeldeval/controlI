<?php

/**
 * This is the model class for table "cta".
 *
 * The followings are the available columns in table 'cta':
 * @property integer $idCTA
 * @property string $Nombre
 * @property string $Password
 * @property string $Jerarquia
 * @property integer $Incidentes_idIncidente
 */
class Cta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idCTA, Nombre, Password, Jerarquia, Incidentes_idIncidente', 'required'),
			array('idCTA, Incidentes_idIncidente', 'numerical', 'integerOnly'=>true),
			array('Nombre, Password, Jerarquia', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idCTA, Nombre, Password, Jerarquia, Incidentes_idIncidente', 'safe', 'on'=>'search'),
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
			'idCTA' => 'Id Cta',
			'Nombre' => 'Nombre',
			'Password' => 'Password',
			'Jerarquia' => 'Jerarquia',
			'Incidentes_idIncidente' => 'Incidentes Id Incidente',
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

		$criteria->compare('idCTA',$this->idCTA);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('Jerarquia',$this->Jerarquia,true);
		$criteria->compare('Incidentes_idIncidente',$this->Incidentes_idIncidente);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
