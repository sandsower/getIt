<?php

/**
 * This is the model class for table "unidad_medida".
 *
 * The followings are the available columns in table 'unidad_medida':
 * @property integer $idUnidad_Medida
 * @property string $Descripcion
 * @property string $Abreviacion
 *
 * The followings are the available model relations:
 * @property Productos[] $productoses
 */
class UnidadMedida extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return UnidadMedida the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'unidad_medida';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Descripcion', 'length', 'max'=>45),
			array('Abreviacion', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idUnidad_Medida, Descripcion, Abreviacion', 'safe', 'on'=>'search'),
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
			'productoses' => array(self::HAS_MANY, 'Productos', 'idUnidad_Medida'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUnidad_Medida' => 'Id Unidad Medida',
			'Descripcion' => 'Descripcion',
			'Abreviacion' => 'Abreviacion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idUnidad_Medida',$this->idUnidad_Medida);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Abreviacion',$this->Abreviacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}