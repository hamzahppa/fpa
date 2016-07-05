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

	public function actionRegister()
	{
		$model = new FpaUser;

		$username = "user".rand(100, 999).date('dH');
		
		$this->performAjaxValidation($model);

		$model->username = $username;

		if (isset($_POST['FpaUser'])) {
			$model->attributes = $_POST['FpaUser'];
			if ($model->save()) {
				$this->redirect('index');
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