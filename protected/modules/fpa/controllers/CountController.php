<?php

class CountController extends Controller
{
	public $layout = 'main';

	public function accessRules()
	{
		$user = Yii::app()->user->no_user;
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index'),
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
		$modelFPA = FpaFpa::model()->findByPk($id_fpa);
		// count TDI and TCA
		$TDI = $this->countTDI($id_fpa);
		$TCA = $this->countTCA($TDI);
		$modelFPA->tca = $TCA;
		$modelFPA->save();
		// End Count TDI and TCA

		// Count Weight Function
		$modelFp = FpaFp::model()->findAllByAttributes(array('id_fpa'=>$id_fpa));
		for ($i=0; $i < count($modelFp); $i++) {
			$tipe = $modelFp[$i]->tipe;
			$group = $this->getGroup($tipe, $modelFp[$i]);
			$weight = $this->getWeight($tipe, $group);
			// if ($tipe === "ILF") {
			// 	$DET = $modelFp[$i]->DET;
			// 	if ($DET >= 1 and $DET <=19) {
			// 		$RET = $modelFp[$i]->RET;
			// 		// echo "low";
			// 		if ($RET == 1) {
			// 			$weight = 7;
			// 		} else if ($RET >= 2 and $RET <= 5) {
			// 			$weight = 7;
			// 		} else if ($RET >= 6){
			// 			$weight = 10;
			// 		} else{
			// 			echo "invalid RET value";
			// 		}
			// 	} else if($DET >= 20 and $DET <=50){
			// 		// echo "average";
			// 		if ($RET == 1) {
			// 			$weight = 7;
			// 		} else if ($RET >= 2 and $RET <= 5) {
			// 			$weight = 10;
			// 		} else if ($RET >= 6){
			// 			$weight = 15;
			// 		} else{
			// 			echo "invalid RET value";
			// 		}
			// 	} else if($DET >= 51){
			// 		// echo "high";
			// 		if ($RET == 1) {
			// 			$weight = 10;
			// 		} else if ($RET >= 2 and $RET <= 5) {
			// 			$weight = 15;
			// 		} else if ($RET >= 6){
			// 			$weight = 15;
			// 		} else {
			// 			echo "invalid RET value";
			// 		}
			// 	} else {
			// 		echo "invalid DET value";
			// 	}
			// } else if ($tipe === "EIF") {
			// 	$DET = $modelFp[$i]->DET;
			// 	if ($DET >= 1 and $DET <=19) {
			// 		$RET = $modelFp[$i]->RET;
			// 		// echo "low";
			// 		if ($RET == 1) {
			// 			$weight = 5;
			// 		} else if ($RET >= 2 and $RET <= 5) {
			// 			$weight = 5;
			// 		} else if ($RET >= 6){
			// 			$weight = 7;
			// 		} else{
			// 			echo "invalid RET value";
			// 		}
			// 	} else if($DET >= 20 and $DET <=50){
			// 		// echo "average";
			// 		if ($RET == 1) {
			// 			$weight = 5;
			// 		} else if ($RET >= 2 and $RET <= 5) {
			// 			$weight = 7;
			// 		} else if ($RET >= 6){
			// 			$weight = 10;
			// 		} else{
			// 			echo "invalid RET value";
			// 		}
			// 	} else if($DET >= 51){
			// 		// echo "high";
			// 		if ($RET == 1) {
			// 			$weight = 7;
			// 		} else if ($RET >= 2 and $RET <= 5) {
			// 			$weight = 10;
			// 		} else if ($RET >= 6){
			// 			$weight = 10;
			// 		} else {
			// 			echo "invalid RET value";
			// 		}
			// 	} else {
			// 		echo "invalid DET value";
			// 	}
			// } else if ($tipe === "EI") {
			// 	$DET = $modelFp[$i]->DET;
			// 	if ($DET >= 1 and $DET <=4) {
			// 		$FTR = $modelFp[$i]->FTR;
			// 		// echo "low";
			// 		if ($FTR == 1) {
			// 			$weight = 3;
			// 		} else if ($FTR == 2) {
			// 			$weight = 3;
			// 		} else if ($FTR >= 3){
			// 			$weight = 4;
			// 		} else{
			// 			echo "invalid FTR value";
			// 		}
			// 	} else if($DET >= 5 and $DET <=15){
			// 		// echo "average";
			// 		if ($FTR == 1) {
			// 			$weight = 3;
			// 		} else if ($FTR == 2) {
			// 			$weight = 4;
			// 		} else if ($FTR >= 3){
			// 			$weight = 6;
			// 		} else{
			// 			echo "invalid FTR value";
			// 		}
			// 	} else if($DET >= 16){
			// 		// echo "high";
			// 		if ($FTR == 1) {
			// 			$weight = 4;
			// 		} else if ($FTR == 2) {
			// 			$weight = 6;
			// 		} else if ($FTR >= 3){
			// 			$weight = 6;
			// 		} else{
			// 			echo "invalid FTR value";
			// 		}
			// 	} else {
			// 		echo "invalid DET value";
			// 	}
			// } else if ($tipe === "EO") {
			// 	$DET = $modelFp[$i]->DET;
			// 	if ($DET >= 1 and $DET <=5) {
			// 		$FTR = $modelFp[$i]->FTR;
			// 		// echo "low";
			// 		if ($FTR == 1) {
			// 			$weight = 4;
			// 		} else if ($FTR >= 2 and $FTR <=3) {
			// 			$weight = 4;
			// 		} else if ($FTR >= 4){
			// 			$weight = 5;
			// 		} else{
			// 			echo "invalid FTR value";
			// 		}
			// 	} else if($DET >= 6 and $DET <=20){
			// 		// echo "average";
			// 		if ($FTR == 1) {
			// 			$weight = 4;
			// 		} else if ($FTR >= 2 and $FTR <=3) {
			// 			$weight = 5;
			// 		} else if ($FTR >= 4){
			// 			$weight = 7;
			// 		} else{
			// 			echo "invalid FTR value";
			// 		}
			// 	} else if($DET >= 21){
			// 		// echo "high";
			// 		if ($FTR == 1) {
			// 			$weight = 5;
			// 		} else if ($FTR >= 2 and $FTR <=3) {
			// 			$weight = 7;
			// 		} else if ($FTR >= 4){
			// 			$weight = 7;
			// 		} else{
			// 			echo "invalid FTR value";
			// 		}
			// 	} else {
			// 		echo "invalid DET value";
			// 	}
			// } else if ($tipe === "EQ") {
			// 	$DET = $modelFp[$i]->DET;
			// 	if ($DET >= 1 and $DET <=5) {
			// 		$FTR = $modelFp[$i]->FTR;
			// 		// echo "low";
			// 		if ($FTR == 1) {
			// 			$weight = 3;
			// 		} else if ($FTR >= 2 and $FTR <=3) {
			// 			$weight = 3;
			// 		} else if ($FTR >= 4){
			// 			$weight = 4;
			// 		} else{
			// 			echo "invalid FTR value";
			// 		}
			// 	} else if($DET >= 6 and $DET <=20){
			// 		// echo "average";
			// 		if ($FTR == 1) {
			// 			$weight = 3;
			// 		} else if ($FTR >= 2 and $FTR <=3) {
			// 			$weight = 4;
			// 		} else if ($FTR >= 4){
			// 			$weight = 6;
			// 		} else{
			// 			echo "invalid FTR value";
			// 		}
			// 	} else if($DET >= 21){
			// 		// echo "high";
			// 		if ($FTR == 1) {
			// 			$weight = 4;
			// 		} else if ($FTR >= 2 and $FTR <=3) {
			// 			$weight = 6;
			// 		} else if ($FTR >= 4){
			// 			$weight = 6;
			// 		} else{
			// 			echo "invalid FTR value";
			// 		}
			// 	} else {
			// 		echo "invalid DET value";
			// 	}
			// } else {
			// 	echo "Invalid Function Type";
			// }
			$modelFp[$i]->weight = $weight;
			$modelFp[$i]->save();
		}
		// End Count Weight

		// Count UFP
		$UFP = 0;
		for ($i=0; $i < count($modelFp); $i++) { 
			$UFP = $UFP + $modelFp[$i]->weight; 
		}
		$modelFPA->ufp = $UFP;
		$modelFPA->save();
		$FP = $modelFPA->tca*$modelFPA->ufp;
		$modelFPA->fp = $FP;
		$modelFPA->save();
		// End Count UFP

		$this->render('index', array(
			'modelFPA'=>$modelFPA,
		));
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
					echo "invalid RET value";
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
					echo "invalid RET value";
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
					echo "invalid RET value";
				}
			} else {
				echo "invalid DET value";
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
					echo "invalid FTR value";
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
					echo "invalid FTR value";
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
					echo "invalid FTR value";
				}
			} else {
				echo "invalid DET value";
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
					echo "invalid FTR value";
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
					echo "invalid FTR value";
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
					echo "invalid FTR value";
				}
			} else {
				echo "invalid DET value";
			}
		} else {
			echo "Invalid FUnction Type";
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

}

?>