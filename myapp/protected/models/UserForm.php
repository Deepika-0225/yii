<?php


class UserForm extends CActiveRecord {
    public $name;
    public $email;
    public $password;
    public $gender;



    public function tablename(){

        return 'user';
    }


    public function rules() {
        return array(
            array('name, email, password, gender', 'required'), // Fields are required
            array('email', 'email'), // Validate email format
        );
    }

    public function attributeLabels() {
        return array(
            'name' => 'Full Name',
            'email' => 'Email Address',
            'password' => 'Password',
        );
    }
}


?>