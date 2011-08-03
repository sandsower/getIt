<?php

/**
 * This is the model class for table "proveedor_producto".
 *
 * The followings are the available columns in table 'proveedor_producto':
 * @property integer $idProveedor_Producto
 * @property integer $idProveedores
 * @property integer $idProductos
 *
 * The followings are the available model relations:
 * @property Productos $idProductos0
 * @property Proveedores $idProveedores0
 */
class ProveedorProducto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return ProveedorProducto the static model class
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
		return 'proveedor_producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idProveedor_Producto, idProveedores, idProductos', 'required'),
			array('idProveedor_Producto, idProveedores, idProductos', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idProveedor_Producto, idProveedores, idProductos', 'safe', 'on'=>'search'),
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
			'idProductos0' => array(self::BELONGS_TO, 'Productos', 'idProductos'),
			'idProveedores0' => array(self::BELONGS_TO, 'Proveedores', 'idProveedores'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProveedor_Producto' => 'Id Proveedor Producto',
			'idProveedores' => 'Id Proveedores',
			'idProductos' => 'Id Productos',
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

		$criteria->compare('idProveedor_Producto',$this->idProveedor_Producto);
		$criteria->compare('idProveedores',$this->idProveedores);
		$criteria->compare('idProductos',$this->idProductos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}