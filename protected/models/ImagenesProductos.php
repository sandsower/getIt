<?php

/**
 * This is the model class for table "imagenes_productos".
 *
 * The followings are the available columns in table 'imagenes_productos':
 * @property integer $idImagenes_Productos
 * @property string $Nombre
 * @property string $Descripcion
 * @property string $Direccion
 * @property integer $idProductos
 *
 * The followings are the available model relations:
 * @property Productos $idProductos0
 */
class ImagenesProductos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return ImagenesProductos the static model class
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
		return 'imagenes_productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idProductos', 'required'),
			array('idProductos', 'numerical', 'integerOnly'=>true),
			array('Nombre', 'length', 'max'=>45),
			array('Direccion', 'length', 'max'=>145),
			array('Descripcion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idImagenes_Productos, Nombre, Descripcion, Direccion, idProductos', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idImagenes_Productos' => 'Id Imagenes Productos',
			'Nombre' => 'Nombre',
			'Descripcion' => 'Descripcion',
			'Direccion' => 'Direccion',
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

		$criteria->compare('idImagenes_Productos',$this->idImagenes_Productos);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('idProductos',$this->idProductos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}