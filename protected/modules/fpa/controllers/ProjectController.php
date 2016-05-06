<?php 

class ProjectController extends Controller
{
	public $layout = 'main';

	public function filters()
	{
		return array(
			'accessControl',
			'postOnly + delete',
		);
	}

	public function actionIndex()
	{
		if ($this->workOnProject()) {
			$id_fpa = $this->workOnProject();

			$this->redirect(array(
				'detail',
				'id'=>$id_fpa,
			));
		}

		$modelFPA = FpaFpa::model()->findAll();
		 
		$this->render('index', array(
			'modelFPA'=>$modelFPA,
		));
	}

	public function actionTambah()
	{
		$model = new FpaFpa;

		$this->performAjaxValidation($model);

		if (isset($_POST['FpaFpa'])) 
		{
			$model->attributes=$_POST['FpaFpa'];
			if ($model->save()) {
				$this->setProject($model->id_fpa);
			}
		}

		$this->render('tambah', array(
			'model'=>$model,
		));
	}

	public function actionDetail($id)
	{
		$modelTable = FpaFp::model()->findAllByAttributes(array(
			'id_fpa'=>$id,
			'tipe'=>'ILF'
		));

		$modelFunction = FpaFp::model()->findAllByAttributes(array(
			'id_fpa'=>$id,
			'tipe'=>array('EI','EO','EQ','EIF'),
		));

		$this->render('detail', array(
			'model'=>$this->loadModel($id),
			'modelTable'=>$modelTable,
			'modelFunction'=>$modelFunction,			
		));
	}

	public function actionEdit($id)
	{
		$this->setProject($id);
		$model = FpaFpa::model()->findByPk($id);

		$this->performAjaxValidation($model);

		if (isset($_POST['FpaFpa'])) 
		{
			$model->attributes=$_POST['FpaFpa'];
			if ($model->save()) {
				$this->setProject($model->id_fpa);
				$this->redirect(Yii::app()->createUrl('fpa/project/detail', array('id'=>$model->id_fpa)));
			}
		}

		$this->render('edit', array(
			'model'=>$model,
		));
	}

	public function actionSelect($id)
	{
		$this->setProject($id);
		$this->redirect(Yii::app()->createUrl('fpa/tdi'));
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

	public function loadModel($id)
	{
		$model = FpaFpa::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404, "Error, the requested page does not exist.");
		}
		return $model;
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