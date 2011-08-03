<?php

/**
 * This is the model class for table "producto_impuesto".
 *
 * The followings are the available columns in table 'producto_impuesto':
 * @property integer $idProducto_Impuesto
 * @property integer $idProductos
 * @property integer $idImpuestos
 *
 * The followings are the available model relations:
 * @property Impuestos $idImpuestos0
 * @property Productos $idProductos0
 */
class ProductoImpuesto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return ProductoImpuesto the static model class
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
		return 'producto_impuesto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idProductos, idImpuestos', 'required'),
			array('idProductos, idImpuestos', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idProducto_Impuesto, idProductos, idImpuestos', 'safe', 'on'=>'search'),
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
			'idImpuestos0' => array(self::BELONGS_TO, 'Impuestos', 'idImpuestos'),
			'idProductos0' => array(self::BELONGS_TO, 'Productos', 'idProductos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProducto_Impuesto' => 'Id Producto Impuesto',
			'idProductos' => 'Id Productos',
			'idImpuestos' => 'Id Impuestos',
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

		$criteria->compare('idProducto_Impuesto',$this->idProducto_Impuesto);
		$criteria->compare('idProductos',$this->idProductos);
		$criteria->compare('idImpuestos',$this->idImpuestos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}