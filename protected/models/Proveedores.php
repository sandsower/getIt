<?php

/**
 * This is the model class for table "proveedores".
 *
 * The followings are the available columns in table 'proveedores':
 * @property integer $idProveedores
 * @property string $Clave
 * @property string $Nombre
 * @property string $Direccion
 * @property string $Telefono
 * @property integer $Usuarios_id
 *
 * The followings are the available model relations:
 * @property ProveedorProducto[] $proveedorProductos
 * @property Usuarios $usuarios
 */
class Proveedores extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Proveedores the static model class
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
		return 'proveedores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Usuarios_id', 'required'),
			array('Usuarios_id', 'numerical', 'integerOnly'=>true),
			array('Clave, Nombre, Telefono', 'length', 'max'=>45),
			array('Direccion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idProveedores, Clave, Nombre, Direccion, Telefono, Usuarios_id', 'safe', 'on'=>'search'),
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
			'proveedorProductos' => array(self::HAS_MANY, 'ProveedorProducto', 'idProveedores'),
			'usuarios' => array(self::BELONGS_TO, 'Usuarios', 'Usuarios_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProveedores' => 'Id Proveedores',
			'Clave' => 'Clave',
			'Nombre' => 'Nombre',
			'Direccion' => 'Direccion',
			'Telefono' => 'Telefono',
			'Usuarios_id' => 'Usuarios',
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

		$criteria->compare('idProveedores',$this->idProveedores);
		$criteria->compare('Clave',$this->Clave,true);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Telefono',$this->Telefono,true);
		$criteria->compare('Usuarios_id',$this->Usuarios_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}