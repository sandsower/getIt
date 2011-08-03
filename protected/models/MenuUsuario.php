<?php

/**
 * This is the model class for table "menu_usuario".
 *
 * The followings are the available columns in table 'menu_usuario':
 * @property integer $idMenu_Usuario
 * @property string $Descripcion
 * @property string $Direccion
 * @property integer $Tipo_Usuario_ID
 *
 * The followings are the available model relations:
 * @property TipoUsuario $tipoUsuario
 */
class MenuUsuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return MenuUsuario the static model class
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
		return 'menu_usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Tipo_Usuario_ID', 'required'),
			array('Tipo_Usuario_ID', 'numerical', 'integerOnly'=>true),
			array('Descripcion, Direccion', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idMenu_Usuario, Descripcion, Direccion, Tipo_Usuario_ID', 'safe', 'on'=>'search'),
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
			'tipoUsuario' => array(self::BELONGS_TO, 'TipoUsuario', 'Tipo_Usuario_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idMenu_Usuario' => 'Id Menu Usuario',
			'Descripcion' => 'Descripcion',
			'Direccion' => 'Direccion',
			'Tipo_Usuario_ID' => 'Tipo Usuario',
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

		$criteria->compare('idMenu_Usuario',$this->idMenu_Usuario);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Tipo_Usuario_ID',$this->Tipo_Usuario_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}