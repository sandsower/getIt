<?php

/**
 * This is the model class for table "productos".
 *
 * The followings are the available columns in table 'productos':
 * @property integer $idProductos
 * @property string $Descripcion
 * @property double $Precio
 * @property integer $idCategorias
 * @property integer $idUnidad_Medida
 *
 * The followings are the available model relations:
 * @property ImagenesProductos[] $imagenesProductoses
 * @property ProductoImpuesto[] $productoImpuestos
 * @property Categorias $idCategorias0
 * @property UnidadMedida $idUnidadMedida
 * @property ProveedorProducto[] $proveedorProductos
 */
class Productos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Productos the static model class
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
		return 'productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idCategorias, idUnidad_Medida', 'required'),
			array('idCategorias, idUnidad_Medida', 'numerical', 'integerOnly'=>true),
			array('Precio', 'numerical'),
			array('Descripcion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idProductos, Descripcion, Precio, idCategorias, idUnidad_Medida', 'safe', 'on'=>'search'),
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
			'imagenesProductoses' => array(self::HAS_MANY, 'ImagenesProductos', 'idProductos'),
			'productoImpuestos' => array(self::HAS_MANY, 'ProductoImpuesto', 'idProductos'),
			'idCategorias0' => array(self::BELONGS_TO, 'Categorias', 'idCategorias'),
			'idUnidadMedida' => array(self::BELONGS_TO, 'UnidadMedida', 'idUnidad_Medida'),
			'proveedorProductos' => array(self::HAS_MANY, 'ProveedorProducto', 'idProductos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProductos' => 'Id Productos',
			'Descripcion' => 'Descripcion',
			'Precio' => 'Precio',
			'idCategorias' => 'Id Categorias',
			'idUnidad_Medida' => 'Id Unidad Medida',
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

		$criteria->compare('idProductos',$this->idProductos);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Precio',$this->Precio);
		$criteria->compare('idCategorias',$this->idCategorias);
		$criteria->compare('idUnidad_Medida',$this->idUnidad_Medida);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}