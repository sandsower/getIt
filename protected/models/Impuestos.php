<?php

/**
 * This is the model class for table "impuestos".
 *
 * The followings are the available columns in table 'impuestos':
 * @property integer $idImpuestos
 * @property string $Descripcion
 * @property double $Porcentaje
 *
 * The followings are the available model relations:
 * @property ProductoImpuesto[] $productoImpuestos
 */
class Impuestos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Impuestos the static model class
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
		return 'impuestos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Porcentaje', 'numerical'),
			array('Descripcion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idImpuestos, Descripcion, Porcentaje', 'safe', 'on'=>'search'),
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
			'productoImpuestos' => array(self::HAS_MANY, 'ProductoImpuesto', 'idImpuestos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idImpuestos' => 'Id Impuestos',
			'Descripcion' => 'Descripcion',
			'Porcentaje' => 'Porcentaje',
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

		$criteria->compare('idImpuestos',$this->idImpuestos);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Porcentaje',$this->Porcentaje);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}