<?php 

class ProjectController extends Controller
{
	public $layout = "main";

	public function filters()
	{
		return array(
			'accessControl',
			'postOnly + delete',
		);
	}

	public function accessRules()
	{
		$user = Yii::app()->user->no_user;
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','tambah','detail','edit','select', 'done', 'editTdi', 'lang', 'unsetLang'),
				'expression'=>"$user !== null",
			),
			array('deny',  // deny all users
				'users'=>array('*'),
				'deniedCallback'=>array($this, 'deny'),
			),
		);
	}

	public function deny()
	{
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionIndex()
	{
		$user = Yii::app()->user->no_user;

		$this->checkLang();
		$lang = Yii::app()->session['lang'];

		// if (!isset(Yii::app()->session['lang'])) {
		// 	Yii::app()->session['lang'] = 'EN';
		// }
		// $lang = Yii::app()->session['lang'];

		if ($this->workOnProject()) {
			$id_fpa = $this->workOnProject();

			$this->redirect(array(
				'detail',
				'id'=>$id_fpa,
			));
		}

		$modelFPA = FpaFpa::model()->findAllByAttributes(array('no_user'=>$user), array('order'=>'id_fpa DESC'));
		
		// if ($lang == "EN") {
		// 	$this->render('index', array(
		// 		'modelFPA'=>$modelFPA,
		// 	));
		// }elseif ($lang == "ID") {
		// 	$this->render('index_id', array(
		// 		'modelFPA'=>$modelFPA,
		// 	));		
		// }else{
		// 	$this->render('index', array(
		// 		'modelFPA'=>$modelFPA,
		// 	));
		// }
		if ($lang == "ID") {
			$this->render('index_id', array(
				'modelFPA'=>$modelFPA,
			));
		}else{
			$this->render('index', array(
				'modelFPA'=>$modelFPA,
			));
		}
	}

	public function actionTambah()
	{
		$user = Yii::app()->user->no_user;
		$this->checkLang();
		$lang = Yii::app()->session['lang'];
		
		$model = new FpaFpa;

		$this->performAjaxValidation($model);

		if (isset($_POST['FpaFpa'])) 
		{
			$model->attributes=$_POST['FpaFpa'];
			$model->no_user=$user;
			if ($model->save()) {
				$this->setProject($model->id_fpa);
				$this->redirect(Yii::app()->createUrl('fpa/tdi'));
			}
		}

		if ($lang == "ID") {
			$this->render('tambah_id', array(
				'model'=>$model,
			));
		}else{
			$this->render('tambah', array(
				'model'=>$model,
			));
		}
	}

	public function actionDetail($id)
	{
		$this->checkLang();
		$lang = Yii::app()->session['lang'];
		
		$modelTable = FpaFp::model()->findAllByAttributes(array(
			'id_fpa'=>$id,
			'tipe'=>'ILF'
		));

		$modelFunction = FpaFp::model()->findAllByAttributes(array(
			'id_fpa'=>$id,
			'tipe'=>array('EI','EO','EQ','EIF'),
		));

		if ($lang == "ID") {
			$this->render('detail_id', array(
				'model'=>$this->loadModel($id),
				'modelTable'=>$modelTable,
				'modelFunction'=>$modelFunction,			
			));
		}else{
			$this->render('detail', array(
				'model'=>$this->loadModel($id),
				'modelTable'=>$modelTable,
				'modelFunction'=>$modelFunction,			
			));
		}
	}

	public function actionEdit($id)
	{
		$this->checkLang();
		$lang = Yii::app()->session['lang'];
		// $this->setProject($id);
		$model = FpaFpa::model()->findByPk($id);

		$this->performAjaxValidation($model);

		if (isset($_POST['FpaFpa'])) 
		{
			$model->attributes=$_POST['FpaFpa'];
			if ($model->save()) {
				$this->setProject($model->id_fpa);
				$this->redirect(Yii::app()->createUrl('fpa/project/detail', array('id'=>$model->id_fpa)));
				// $this->redirect(Yii::app()->createUrl('fpa/project'));
			}
		}

		if ($lang == "ID") {
			$this->render('edit_id', array(
				'model'=>$model,
			));
		}else{
			$this->render('edit', array(
				'model'=>$model,
			));
		}
	}

	public function actionSelect($id)
	{
		$this->setProject($id);
		$this->redirect(array('detail', 'id'=>$id));
	}

	public function actionDone()
	{
		// Yii::app()->session->destroy();
		$this->unsetProject();
		$this->redirect('index');
	}	

	public function setProject($id)
	{
		$model = FpaFpa::model()->findByPk($id);
		Yii::app()->session['workonproject'] = $id;
		Yii::app()->session['workonproject_name'] = $model->nama_fpa;
	}

	public function unsetProject()
	{
		unset(Yii::app()->session['workonproject']);
		unset(Yii::app()->session['workonproject_name']);
	}

	public function actionEditTdi($id)
	{
		$this->setProject($id);
		$this->redirect(Yii::app()->createUrl('fpa/tdi/addTdi', array('id_gsc'=>1)));
	}

	public function getGscPoint($id_gsc, $value)
	{
		$GscPoint = FpaGscpoint::model()->findByAttributes(array(
			'id_gsc'=>$id_gsc,
			'value'=>$value
		));
		if (is_null($GscPoint)) {
			return null;
		}
		return $GscPoint;
	}

	public function workOnProject()
	{
		if (is_null(Yii::app()->session['workonproject'])) {
			// throw new CHttpException(404, "Session not found");
			// set notification to choose project
			// $this->redirect(Yii::app()->createUrl('fpa/project'));
			return false;
		}
		return Yii::app()->session['workonproject'];
	}

	public function actionLang($lang)
	{
		Yii::app()->session['lang'] = $lang;
		$this->redirect(Yii::app()->homeUrl);
	}

	public function checkLang()
	{
		if (!isset(Yii::app()->session['lang'])) {
			return Yii::app()->session['lang'] = 'EN';
		}
	}

	public function actionUnsetLang()
	{
		unset(Yii::app()->session['lang']);
	}

	public function loadModel($id)
	{
		$model = FpaFpa::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404, "Error, the requested page does not exist.");
		}
		return $model;
	}

	public function getName(){
		$modelUser = FpaUser::model()->findByAttributes(array('username'=>Yii::app()->user->name));
		if ($modelUser === null) {
			// $modelUser = FpaUser::model()->findByAttributes(array('email'=>Yii::app()->user->name));
			return Yii::app()->user->name;
		} else {
			return $modelUser->email;
		}
	}

	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='fpa-form') 
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

?>