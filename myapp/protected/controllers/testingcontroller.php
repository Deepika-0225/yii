

<?php

class UserController extends CController {
    public function actionForm() {
        $model = new UserForm; // Create an instance of your form model
        if (isset($_POST['UserForm'])) {
            $model->attributes = $_POST['UserForm']; // Load submitted data into the model
            if ($model->validate()) {
                // Process the form data (e.g., save to the database)
                echo "Form submitted successfully!";
                return;
            }
        }
        $this->render('form', array('model' => $model)); // Render the form view
    }
}

?>