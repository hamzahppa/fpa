<?php  
	class WebUser extends CWebUser
	{
		private $no_user;

		public function getNo_user()
		{
			if ($this->isGuest) {
				return null;
			}

			$model = FpaUser::model()->findByPk($this->name);
			return $model->no_user;
		}
	}
?>