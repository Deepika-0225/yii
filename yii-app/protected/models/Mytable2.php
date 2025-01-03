<?php

/**
 * This is the model class for table "mytable2".
 *
 * The followings are the available columns in table 'mytable2':
 * @property string $customer_id
 * @property string $customer_name
 * @property integer $register_number
 */
class Mytable2 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mytable2';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('register_number', 'numerical', 'integerOnly'=>true),
			array('customer_name', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('customer_id, customer_name, register_number', 'safe', 'on'=>'search'),
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
			'customer_id' => 'Customer',
			'customer_name' => 'Customer Name',
			'register_number' => 'Register Number',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('customer_id',$this->customer_id,true);
		$criteria->compare('customer_name',$this->customer_name,true);
		$criteria->compare('register_number',$this->register_number);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mytable2 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
