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
		$modelDataFunction = new FpaDatafunction;

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
			}else{
				throw new CHttpException("Can not save function", 310);
				
			}
		}


		$this->render('addFunction', array(
			'modelFp'=>$modelFp,
			'modelDataFunction'=>$modelDataFunction,
		));
	}

	public function actionAddTable()
	{
		$id_fpa = $this->workOnProject();
		$modelFp = new FpaFp;
		$modelDataFunction = new FpaDatafunction;

		$this->performAjaxValidation($modelFp);
		if (isset($_POST['FpaFp'])) 
		{
			$modelFp->attributes=$_POST['FpaFp'];
			$modelFp->id_fpa = $id_fpa;
			$modelFp->tipe = 'ILF';
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
				throw new CHttpException("Can not save function", 320);
				
			}
		}

		$this->render('addTable', array(
			'modelFp'=>$modelFp,
			'modelDataFunction'=>$modelDataFunction,
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
