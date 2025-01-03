

<?php

class UserController extends Controller {



    public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

    public function actionForm() {
        $model = new UserForm; // Create an instance of your form model
        if (isset($_POST['UserForm'])) {
            $model->attributes = $_POST['UserForm']; 
            
            // Load submitted data into the model
            if ($model->validate()) {

            // to post the entered data in the screen
                // // Process the form data (e.g., save to the database)
                // echo "Form submitted successfully!";
                // echo $_POST['UserForm']['name'];
                // echo"<br>";
                // echo $_POST['UserForm']['email'];
                // echo"<br>";
                // echo $_POST['UserForm']['gender'];
                // echo"<br>";
                // echo $_POST['UserForm']['password'];
                // echo"<br>";
                // return;

                $model->save();
            }
        }
        $this->render('form' ,array('model'=>$model)); // Render the form view
    }
}

?>