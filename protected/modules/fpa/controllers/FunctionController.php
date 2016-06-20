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
		$modelTable = FpaFp::model()->findAllByAttributes(array(
			'id_fpa'=>$id,
			'tipe'=>'ILF'
		));

		$modelFunction = FpaFp::model()->findAllByAttributes(array(
			'id_fpa'=>$id,
			'tipe'=>array('EI','EO','EQ','EIF'),
		));

		$this->render('index', array(
			'modelTable'=>$modelTable,
			'modelFunction'=>$modelFunction,
		));
	}

	public function actionAddFunction()
	{
		$id_fpa = $this->workOnProject();
		$modelFp = new FpaFp;

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


		$this->render('addFunction', array(
			'modelFp'=>$modelFp,
		));
	}

	public function actionEditFunction($id_fp)
	{
		$id_fpa = $this->workOnProject();
		$modelFp = FpaFp::model()->findByPk($id_fp);

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
			$this->render('editTable', array(
				'modelFp'=>$modelFp,
			));	
		}
		if ($modelFp->tipe == "EI" || $modelFp->tipe == "EO" || $modelFp->tipe == "EQ") {
			$this->render('editFunction', array(
				'modelFp'=>$modelFp,
			));	
		}
	}

	public function actionAddTable()
	{
		$id_fpa = $this->workOnProject();
		$modelFp = new FpaFp;

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

		$this->render('addTable', array(
			'modelFp'=>$modelFp,
		));
	}

	public function workOnProject()
	{
		if (is_null(Yii::app()->session['workonproject'])) {
			// throw new CHttpException(404, "Session not found");
			$this->redirect(Yii::app()->createUrl('fpa/project'));
		}
		return Yii::app()->session['workonproject'];
	}

	public function loadModel($id)
	{
		$model = FpaFp::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404, "Error, the requested page does not exist.");
		}
		return $model;
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
