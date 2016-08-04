<?php  
	class WebUser extends CWebUser
	{
		private $no_user;

		public function getNo_user()
		{
			if ($this->isGuest) {
				return null;
			}

			$model = FpaUser::model()->findByAttributes(array('username'=>$this->name));
			if ($model == null) {
				$model = FpaUser::model()->findByAttributes(array('email'=>$this->name));
				return $model->no_user;
			} else {
				return $model->no_user;
			}
		}
	}
?>