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
			return $model->no_user;
		}
	}
?>