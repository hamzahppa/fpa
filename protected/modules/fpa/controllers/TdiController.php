<?php

class TdiController extends Controller
{
	public $layout = 'main';

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
				'actions'=>array('index','addTdi','overview'),
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
		$id_fpa = $this->workOnProject();
		// check if its already filled
		$modelTdi = FpaTdi::model()->findAllByAttributes(array('id_fpa'=>$id_fpa));
		if ($modelTdi != null) {
			$length = count($modelTdi);
			// if its not finished yet
			if ($length < 14) {
				$this->redirect(array(
					'addTdi',
					'id_gsc'=>$length+1,
				));
			}
			// if its finished yet
			$this->redirect(array(
				// 'addTdi',
				// 'id_gsc'=>1,
				'overview'
			));
		}

		// if its a new
		$this->redirect(array(
			'addTdi',
			'id_gsc'=>1,
		));

	}

	public function actionAddTdi($id_gsc)
	{
		$id_fpa = $this->workonproject();
		$modelGsc = FpaGsc::model()->findByPk($id_gsc);

		// check if this gsc already set
		$modelTdi = FpaTdi::model()->findByAttributes(array(
			'id_fpa'=>$id_fpa,
			'id_gsc'=>$id_gsc,
		));

		// if yes
		if ($modelTdi != null) {
			if (isset($_POST['FpaTdi'])) {
				$modelTdi->attributes = $_POST['FpaTdi'];
				$this->saveTdi($modelTdi);
			}

			$this->render('updateTdi', array(
				'modelTdi'=>$modelTdi,
				'modelGsc'=>$modelGsc,
			));
		} else {
		// if no
			$modelTdi = new FpaTdi;

			if (isset($_POST['FpaTdi'])) {
				$modelTdi->attributes = $_POST['FpaTdi'];
				$modelTdi->id_gsc = $id_gsc;
				$modelTdi->id_fpa = $id_fpa;
				$this->saveTdi($modelTdi);
			}

			$this->render('addTdi', array(
				'modelTdi'=>$modelTdi,
				'modelGsc'=>$modelGsc,
			));
		}
	}

	public function saveTdi($modelTdi)
	{
		if ($modelTdi->save()) {
			if ($modelTdi->id_gsc < 14) {
				$this->redirect(array(
					'addTdi',
					'id_gsc'=>$modelTdi->id_gsc+1,
				));
			}
			$this->redirect(array('overview'));
		}
		throw new CHttpException("Can not save value", 200);
	}

	// calon function
	public function actionOverview()
	{
		$id_fpa = $this->workOnProject();
		$modelTdi = FpaTdi::model()->findAllByAttributes(array('id_fpa'=>$id_fpa));

		if ($modelTdi == null) {
			throw new CHttpException(404, "Error, the requested page does not exist.");
		}

		$this->render('overview', array(
			'modelTdi'=>$modelTdi,
		));
	}

	public function workOnProject()
	{
		if (is_null(Yii::app()->session['workonproject'])) {
			// throw new CHttpException(404, "Session not found");
			// set notification to choose project
			$this->redirect(Yii::app()->createUrl('fpa/project'));
		}
		return Yii::app()->session['workonproject'];
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

	public function loadModel($id)
	{
		$model = FpaTdi::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404, "Error, the requested page does not exist.");
		}
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='tdi-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
?>