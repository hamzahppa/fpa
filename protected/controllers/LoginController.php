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
}

?>