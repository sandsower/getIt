<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $id
 * @property string $ApellidoPaterno
 * @property string $ApellidoMaterno
 * @property string $Nombre
 * @property string $Usuario
 * @property string $Password
 * @property string $FechaDeNacimiento
 * @property integer $Tipo_Usuario_ID
 *
 * The followings are the available model relations:
 * @property Clientes[] $clientes
 * @property Proveedores[] $proveedores
 * @property TipoUsuario $tipoUsuario
 */
class Usuarios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Usuarios the static model class
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
		return 'usuarios';
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
			array('ApellidoPaterno, ApellidoMaterno, Nombre, Usuario, Password', 'length', 'max'=>45),
			array('FechaDeNacimiento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, ApellidoPaterno, ApellidoMaterno, Nombre, Usuario, Password, FechaDeNacimiento, Tipo_Usuario_ID', 'safe', 'on'=>'search'),
		);
	}

	public function validatePassword($password)
	{
		return $this->Password;
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'clientes' => array(self::HAS_MANY, 'Clientes', 'Usuarios_id'),
			'proveedores' => array(self::HAS_MANY, 'Proveedores', 'Usuarios_id'),
			'tipoUsuario' => array(self::BELONGS_TO, 'TipoUsuario', 'Tipo_Usuario_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ApellidoPaterno' => 'Apellido Paterno',
			'ApellidoMaterno' => 'Apellido Materno',
			'Nombre' => 'Nombre',
			'Usuario' => 'Usuario',
			'Password' => 'Password',
			'FechaDeNacimiento' => 'Fecha De Nacimiento',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('ApellidoPaterno',$this->ApellidoPaterno,true);
		$criteria->compare('ApellidoMaterno',$this->ApellidoMaterno,true);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Usuario',$this->Usuario,true);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('FechaDeNacimiento',$this->FechaDeNacimiento,true);
		$criteria->compare('Tipo_Usuario_ID',$this->Tipo_Usuario_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}