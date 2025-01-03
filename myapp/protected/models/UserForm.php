

<?php


class UserForm extends CFormModel {
    public $name;
    public $email;
    public $password;

    public function rules() {
        return array(
            array('name, email, password', 'required'), // Fields are required
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