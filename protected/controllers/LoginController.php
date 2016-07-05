<?php  

class LoginController extends Controller
{
	public $layout ='login';

	public function actions()
	{
		return array(
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionIndex()
	{
		if (Yii::app()->user->isGuest) {
			$model = new LoginForm;

			if (isset($_POST['ajax']) && $_POST['ajax']==='login-form') 
			{
				echo CActiveForm::validate($model);
				Yii::app()->end();
			}

			if (isset($_POST['LoginForm'])) 
			{
				$model->attributes=$_POST['LoginForm'];
				if ($model->validate() && $model->login()) 
				{
					// berhasil login
					$this->redirect(Yii::app()->createUrl('fpa/project'));
				}
				echo "gagal";
			}

			$this->render('index', array('model'=>$model));
		}
		else {
			$this->redirect(Yii::app()->createUrl('fpa/project'));
		}
	}

	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionMailMe()
	{
		// $mail = new YiiMailer('contact', array('message' => $model->body, 'name' => $model->name, 'description' => 'Contact form'));
		$mail = new YiiMailer();
		$mail->setView('remainder');
		$mail->setData(array(
			'message' => 'Anda telah terdaftar dengan username dan Password berikut :',
			'username' => 'user872913',
			'password' => 'hamzahppa',
			'name' => 'Admin Function Point Analysis', 
			'description' => 'Pengingat Username dan Password'
		));

		//set properties
		$mail->setFrom('tmenulis@gmail.com', 'Admin');
		$mail->setSubject('Pendaftaran Berhasil, Pengingat Username and Password');
		$mail->setTo('hamzahibnabdullah@gmail.com');
		// $mail->SMTPDebug  = 1;

		//send
		if ($mail->send()) {
			echo "Sukses";
			// Yii::app()->user->setFlash('success','Thank you for contacting us. We will respond to you as soon as possible.');
		} else {
			echo "Gagal";
			// Yii::app()->user->setFlash('error','Error while sending email: '.$mail->getError());
		}	
	}

	public function actionRegister()
	{
		$model = new FpaUser;

		$username = "user".rand(100, 999).date('dH');
		
		$this->performAjaxValidation($model);

		$model->username = $username;

		if (isset($_POST['FpaUser'])) {
			$model->attributes = $_POST['FpaUser'];
			if ($model->save()) {
				$mail = new YiiMailer();
				$mail->setView('remainder');
				$mail->setData(array(
					'message' => 'Anda telah terdaftar dengan username dan Password berikut :',
					'username' => $model->username,
					'password' => $model->password,
					'name' => 'Admin Function Point Analysis', 
					'description' => 'Pengingat Username dan Password'
				));
				//set properties
				$mail->setFrom('tmenulis@gmail.com', 'Admin');
				$mail->setSubject('Pendaftaran Berhasil, Pengingat Username and Password');
				$mail->setTo('hamzahibnabdullah@gmail.com');
				// $mail->SMTPDebug  = 1;
				//send
				if ($mail->send()) {
					$this->redirect('index');
				} else {
					echo "gagalen";
					// $this->redirect('index');
				}	
			}
		}

		$this->render('register', array(
			'model'=>$model,
		));
	}

	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='register-form') 
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

?>