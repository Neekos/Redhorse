<?php 
	
	
	class CabinetController
	{
		
		public function ActionCabinet()
		{
			$userId = User::checkLogged();

			$user = User::getUser($userId);


			require_once(ROOT. '/view/cabinet/cabinet.php');

			return true;
		}

		public function ActionEdit()
		{
			$userId = User::checkLogged();

			$user = User::getUser($userId);


			require_once(ROOT. '/view/cabinet/edit.php');

			return true;
		}


	}
?>