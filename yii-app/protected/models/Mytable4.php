<?php

class Mytable4 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mytable4';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('register_time', 'required'),
			array('', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>20),
			array('location', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, location, email', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'name' => 'Name',
			'location' => 'Location',
			'email' => 'Email',
        );
	}

	
}

?>