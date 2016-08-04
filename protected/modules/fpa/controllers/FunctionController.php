<?php

class FunctionController extends Controller
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
				'actions'=>array('index','addFunction','addTable', 'editFunction'),
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
		$id = $this->workOnProject();
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
			$this->render('index_id', array(
				'modelTable'=>$modelTable,
				'modelFunction'=>$modelFunction,
			));
		} else {
			$this->render('index', array(
				'modelTable'=>$modelTable,
				'modelFunction'=>$modelFunction,
			));
		}
	}

	public function actionAddFunction()
	{
		$id_fpa = $this->workOnProject();
		$modelFp = new FpaFp;
		$this->checkLang();
		$lang = Yii::app()->session['lang'];

		$this->performAjaxValidation($modelFp);
		if (isset($_POST['FpaFp'])) 
		{
			$modelFp->attributes=$_POST['FpaFp'];
			$modelFp->id_fpa = $id_fpa;
			// $modelFp->DET = 0;
			if ($modelFp->save()) {
				// if (isset($_POST['DET'])) {
				// 	foreach ($_POST['DET'] as $DET) {
				// 		$modelDF = new FpaDatafunction;
				// 		$modelDF->DET = $DET;
				// 		$modelDF->id_fp = $modelFp->id_fp;
				// 		if ($modelDF->save()) {
				// 			$modelFp->DET = $modelFp->DET+1;
				// 			$modelFp->save();
				// 		}else{
				// 			throw new CHttpException("Can not save value", 311);
							
				// 		}
				// 	}
				// }
				// if (isset($_POST['FTR'])) {
				// 	foreach ($_POST['FTR'] as $FTR) {
				// 		$modelDF = new FpaDatafunction;
				// 		$modelDF->FTR = $FTR;
				// 		$modelDF->id_fp = $modelFp->id_fp;
				// 		if ($modelDF->save()) {
				// 			$modelFp->FTR = $modelFp->FTR+1;
				// 			$modelFp->save();
				// 		}else{
				// 			throw new CHttpException("Can not save value", 321);
							
				// 		}
				// 	}
				// }
				$this->redirect('index');
			}
			else{
				throw new CHttpException(310, "Can not save function");
			}
		}

		if ($lang == "ID") {
			$this->render('addFunction_id', array(
				'modelFp'=>$modelFp,
			));
		} else {
			$this->render('addFunction', array(
				'modelFp'=>$modelFp,
			));
		}
	}

	public function actionEditFunction($id_fp)
	{
		$id_fpa = $this->workOnProject();
		$modelFp = FpaFp::model()->findByPk($id_fp);
		$this->checkLang();
		$lang = Yii::app()->session['lang'];

		$this->performAjaxValidation($modelFp);
		if (isset($_POST['FpaFp'])) 
		{
			if ($modelFp->tipe == "ILF" || $modelFp->tipe == "EIF") {
				$modelFp->attributes=$_POST['FpaFp'];
				$modelFp->RET = $modelFp->RET+1;
				if ($modelFp->save()) {
					$this->redirect(array('index'));
				}
				else{
					throw new CHttpException(310, "Can not save function");
				}
			}
			else{
				$modelFp->attributes=$_POST['FpaFp'];
				if ($modelFp->save()) {
					$this->redirect(array('index'));
				}
				else{
					throw new CHttpException(310, "Can not save function");
				}
			}
		}

		if ($modelFp->tipe == "ILF" || $modelFp->tipe == "EIF") {
			if ($lang == "ID") {
				$this->render('editTable_id', array(
					'modelFp'=>$modelFp,
				));
			} else {
				$this->render('editTable', array(
					'modelFp'=>$modelFp,
				));
			}
		}
		if ($modelFp->tipe == "EI" || $modelFp->tipe == "EO" || $modelFp->tipe == "EQ") {
			if ($lang == "ID") {
				$this->render('editFunction_id', array(
					'modelFp'=>$modelFp,
				));	
			} else {
				$this->render('editFunction', array(
					'modelFp'=>$modelFp,
				));	
			}
		}
	}

	public function actionAddTable()
	{
		$id_fpa = $this->workOnProject();
		$modelFp = new FpaFp;
		$this->checkLang();
		$lang = Yii::app()->session['lang'];

		$this->performAjaxValidation($modelFp);
		if (isset($_POST['FpaFp'])) 
		{
			$modelFp->attributes=$_POST['FpaFp'];
			$modelFp->id_fpa = $id_fpa;
			$modelFp->bahasa = 'SQL';
			$modelFp->RET= $modelFp->RET+1;
			if ($modelFp->save()) {
				// if (isset($_POST['DET'])) {
				// 	foreach ($_POST['DET'] as $DET) {
				// 		$modelDF = new FpaDatafunction;
				// 		$modelDF->DET = $DET;
				// 		$modelDF->id_fp = $modelFp->id_fp;
				// 		if ($modelDF->save()) {
				// 			$modelFp->DET = $modelFp->DET+1;
				// 			$modelFp->save();
				// 		}else{
				// 			throw new CHttpException("Can not save value", 321);
							
				// 		}
				// 	}
				// }
				// if (isset($_POST['RET'])) {
				// 	foreach ($_POST['RET'] as $RET) {
				// 		$modelDF = new FpaDatafunction;
				// 		$modelDF->RET = $RET;
				// 		$modelDF->id_fp = $modelFp->id_fp;
				// 		if ($modelDF->save()) {
				// 			$modelFp->RET = $modelFp->RET+1;
				// 			$modelFp->save();
				// 		}else{
				// 			throw new CHttpException("Can not save value", 321);
							
				// 		}
				// 	}
				// }
				$this->redirect('index');
			}else{
				throw new CHttpException(320, "Can not save function");
				
			}
		}

		if ($lang == "ID") {
			$this->render('addTable_id', array(
				'modelFp'=>$modelFp,
			));
		} else {
			$this->render('addTable', array(
				'modelFp'=>$modelFp,
			));
		}
	}

	public function workOnProject()
	{
		if (is_null(Yii::app()->session['workonproject'])) {
			// throw new CHttpException(404, "Session not found");
			$this->redirect(Yii::app()->createUrl('fpa/project'));
		}
		return Yii::app()->session['workonproject'];
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
		$model = FpaFp::model()->findByPk($id);
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
		if (isset($_POST['ajax']) && $_POST['ajax']==='fp-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

?>
