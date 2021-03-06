<?php

class CountController extends Controller
{
	public $layout = 'main';

	public function accessRules()
	{
		$user = Yii::app()->user->no_user;
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index', 'riwayat'),
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
		$this->checkLang();
		$lang = Yii::app()->session['lang'];
		$modelFPA = FpaFpa::model()->findByPk($id_fpa);
		$modelRiwayat = new FpaRiwayat;
		// count TDI and TCA
		$TDI = $this->countTDI($id_fpa);
		$TCA = $this->countTCA($TDI);
		$modelFPA->tca = $TCA;
		$modelRiwayat->tca = $TCA;
		$modelFPA->save();
		// End Count TDI and TCA

		// Count Weight Function
		$modelFp = FpaFp::model()->findAllByAttributes(array('id_fpa'=>$id_fpa));
		for ($i=0; $i < count($modelFp); $i++) {
			$tipe = $modelFp[$i]->tipe;
			$group = $this->getGroup($tipe, $modelFp[$i]);
			$weight = $this->getWeight($tipe, $group);
			$modelFp[$i]->weight = $weight;
			$modelFp[$i]->save();
		}
		// End Count Weight

		// Count UFP
		$UFP = 0;
		$UFPSQL = 0;
		$UFPPHP = 0;
		$UFPHTMLJS = 0;
		// count ufp per tipe
		for ($i=0; $i < count($modelFp); $i++) {
			if ($modelFp[$i]->bahasa == "SQL") {
				$UFPSQL = $UFPSQL + $modelFp[$i]->weight;
			} else if ($modelFp[$i]->bahasa == "PHP") {
				$UFPPHP = $UFPPHP + $modelFp[$i]->weight;
			} else if ($modelFp[$i]->bahasa == "HTML" or $modelFp[$i]->tipe ==="Javascript"){
				$UFPHTMLJS = $UFPHTMLJS + $modelFp[$i]->weight;
			}
			// $UFP = $UFP + $modelFp[$i]->weight; 
		}
		// sum UFP
		$UFP = $UFPSQL + $UFPPHP + $UFPHTMLJS;

		// multiply UFP with Productivity Factor
		$UFPSQL = $UFPSQL*37;
		$UFPPHP = $UFPPHP*53;
		$UFPHTMLJS = $UFPHTMLJS*58;
		// sum UFP with productivity factor
		$UFPmultiplied = $UFPSQL + $UFPPHP + $UFPHTMLJS;

		$modelFPA->ufp = $UFP;
		$modelRiwayat->ufp = $UFP;
		$modelFPA->save();
		$FP = $modelFPA->tca*$modelFPA->ufp;
		$LOC = $modelFPA->tca*$UFPmultiplied;
		if ($modelFPA->loc != $LOC) {
			$modelRiwayat->fp = $FP;
			$modelRiwayat->loc = $LOC;
			$modelRiwayat->update_date = date('Y-m-d h:m:s');
			$modelRiwayat->id_fpa = $id_fpa;
			$modelRiwayat->save();
		}
		$modelFPA->fp = $FP;
		$modelFPA->loc = $LOC;
		$modelFPA->save();
		// End Count UFP

		if ($lang == "ID") {
			$this->render('index_id', array(
				'modelFPA'=>$modelFPA,
			));
		} else {
			$this->render('index', array(
				'modelFPA'=>$modelFPA,
			));
		}
	}

	public function countTDI($id_fpa)
	{
		$modelTDI = FpaTdi::model()->findAllByAttributes(array(
			'id_fpa'=>$id_fpa,
		));

		$TDI = 0;
		for ($i=0; $i < count($modelTDI); $i++) { 
			$TDI = $TDI + $modelTDI[$i]->value;
		}

		return $TDI;
	}

	public function countTCA($TDI)
	{
		$TCA = 0.65 + (0.01*$TDI);
		return $TCA;
	}

	public function getGroup($tipe, $modelFp)
	{
		if ($tipe === "ILF" or $tipe === "EIF") {
			$DET = $modelFp->DET;
			if ($DET >= 1 and $DET <=19) {
				$RET = $modelFp->RET;
				// echo "low";
				if ($RET == 1) {
					$group = "low";
				} else if ($RET >= 2 and $RET <= 5) {
					$group = "low";
				} else if ($RET >= 6){
					$group = "average";
				} else{
					// echo "invalid RET value";
					throw new CHttpException(501, "Invalid RET Value on Table '$modelFp->nama_fp'");
					
				}
			} else if($DET >= 20 and $DET <=50){
				$RET = $modelFp->RET;
				// echo "average";
				if ($RET == 1) {
					$group = "low";
				} else if ($RET >= 2 and $RET <= 5) {
					$group = "average";
				} else if ($RET >= 6){
					$group = "high";
				} else{
					// echo "invalid RET value";
					throw new CHttpException(501, "Invalid RET Value on Table '$modelFp->nama_fp'");
				}
			} else if($DET >= 51){
				$RET = $modelFp->RET;
				// echo "high";
				if ($RET == 1) {
					$group = "average";
				} else if ($RET >= 2 and $RET <= 5) {
					$group = "high";
				} else if ($RET >= 6){
					$group = "high";
				} else {
					// echo "invalid RET value";
					throw new CHttpException(501, "Invalid RET Value on Table '$modelFp->nama_fp'");
				}
			} else {
				// echo "invalid DET value";
				throw new CHttpException(501, "Invalid DET Value on Table '$modelFp->nama_fp'");
			}
		} else if ($tipe === "EI") {
			$DET = $modelFp->DET;
			if ($DET >= 1 and $DET <=4) {
				$FTR = $modelFp->FTR;
				// echo "low";
				if ($FTR == 1) {
					$group = "low";
				} else if ($FTR == 2) {
					$group = "low";
				} else if ($FTR >= 3){
					$group = "average";
				} else{
					// echo "invalid FTR value";
					throw new CHttpException(502, "Invalid FTR Value on Function '$modelFp->nama_fp'");
				}
			} else if($DET >= 5 and $DET <=15){
				$FTR = $modelFp->FTR;
				// echo "average";
				if ($FTR == 1) {
					$group = "low";
				} else if ($FTR == 2) {
					$group = "average";
				} else if ($FTR >= 3){
					$group = "high";
				} else{
					// echo "invalid FTR value";
					throw new CHttpException(502, "Invalid FTR Value on Function '$modelFp->nama_fp'");
				}
			} else if($DET >= 16){
				$FTR = $modelFp->FTR;
				// echo "high";
				if ($FTR == 1) {
					$group = "average";
				} else if ($FTR == 2) {
					$group = "high";
				} else if ($FTR >= 3){
					$group = "high";
				} else{
					// echo "invalid FTR value";
					throw new CHttpException(502, "Invalid FTR Value on Function '$modelFp->nama_fp'");
					
				}
			} else {
				// echo "invalid DET value";
				throw new CHttpException(502, "Invalid DET Value on Function '$modelFp->nama_fp'");
			}
		} else if ($tipe === "EO" or $tipe === "EQ") {
			$DET = $modelFp->DET;
			if ($DET >= 1 and $DET <=5) {
				$FTR = $modelFp->FTR;
				// echo "low";
				if ($FTR == 1) {
					$group = "low";
				} else if ($FTR >= 2 and $FTR <=3) {
					$group = "low";
				} else if ($FTR >= 4){
					$group = "average";
				} else{
					// echo "invalid FTR value";
					throw new CHttpException(503, "Invalid FTR Value on Function '$modelFp->nama_fp'");
				}
			} else if($DET >= 6 and $DET <=20){
				$FTR = $modelFp->FTR;
				// echo "average";
				if ($FTR == 1) {
					$group = "low";
				} else if ($FTR >= 2 and $FTR <=3) {
					$group = "average";
				} else if ($FTR >= 4){
					$group = "high";
				} else{
					// echo "invalid FTR value";
					throw new CHttpException(503, "Invalid FTR Value on Function '$modelFp->nama_fp'");
				}
			} else if($DET >= 21){
				$FTR = $modelFp->FTR;
				// echo "high";
				if ($FTR == 1) {
					$group = "average";
				} else if ($FTR >= 2 and $FTR <=3) {
					$group = "high";
				} else if ($FTR >= 4){
					$group = "high";
				} else{
					// echo "invalid FTR value";
					throw new CHttpException(503, "Invalid FTR Value on Function '$modelFp->nama_fp'");
				}
			} else {
				// echo "invalid DET value";
				throw new CHttpException(503, "Invalid DET Value on Function '$modelFp->nama_fp'");
			}
		} else {
			// echo "Invalid FUnction Type";
			throw new CHttpException(500, "Invalid FTR Value on Function '$modelFp->nama_fp'");
		}
		return $group;
	}

	public function getWeight($tipe, $group)
	{
		$weight = 0;
		if ($tipe === "ILF") {
			if ($group === "low") {
				$weight = 7;
			} else if ($group === "average") {
				$weight = 10;
			} else if ($group === "high") {
				$weight = 15;
			} else {
				echo "invalid group";
			}
		} else if ($tipe === "EIF") {
			if ($group === "low") {
				$weight = 5;
			} else if ($group === "average") {
				$weight = 7;
			} else if ($group === "high") {
				$weight = 10;
			} else {
				echo "invalid group";
			}
		} else if ($tipe === "EI") {
			if ($group === "low") {
				$weight = 3;
			} else if ($group === "average") {
				$weight = 4;
			} else if ($group === "high") {
				$weight = 6;
			} else {
				echo "invalid group";
			}
		} else if ($tipe === "EO") {
			if ($group === "low") {
				$weight = 4;
			} else if ($group === "average") {
				$weight = 5;
			} else if ($group === "high") {
				$weight = 7;
			} else {
				echo "invalid group";
			}
		} else if ($tipe === "EQ") {
			if ($group === "low") {
				$weight = 3;
			} else if ($group === "average") {
				$weight = 4;
			} else if ($group === "high") {
				$weight = 6;
			} else {
				echo "invalid group";
			}
		} else {
			echo "Invalid Type";
		}
		return $weight;
	}

	public function actionHistory()
	{
		$id_fpa = $this->workonproject();
		$this->checkLang();
		$lang = Yii::app()->session['lang'];
		$modelRiwayat = FpaRiwayat::model()->findAllByAttributes(array('id_fpa'=>$id_fpa), array('order'=>'update_date DESC'));

		if ($lang == "ID") {
			$this->render('riwayat_id', array(
				'modelRiwayat'=>$modelRiwayat,
			));
		} else {
			$this->render('riwayat', array(
				'modelRiwayat'=>$modelRiwayat,
			));
		}
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

	public function getName(){
		$modelUser = FpaUser::model()->findByAttributes(array('username'=>Yii::app()->user->name));
		if ($modelUser === null) {
			// $modelUser = FpaUser::model()->findByAttributes(array('email'=>Yii::app()->user->name));
			return Yii::app()->user->name;
		} else {
			return $modelUser->email;
		}
	}
}

?>