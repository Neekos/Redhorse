<?php 

	/**
	* 
	*/
	class AdminController
	{
		
		function ActionIndex()
		{
			$userId = User::checkLogged();

			$user = User::getUser($userId);

			if(User::IsNotAdmin()){
				header("location: /");
			}


			require_once(ROOT. '/view/admin/main.php');

			return true;
		}

		function ActionNews()
		{
			$userId = User::checkLogged();

			$user = User::getUser($userId);

			if(User::IsNotAdmin()){
				header("location: /");
			}


			require_once(ROOT. '/view/admin/news/view.php');

			return true;
		}

		function ActionGalereya()
		{
			$userId = User::checkLogged();

			$user = User::getUser($userId);

			if(User::IsNotAdmin()){
				header("location: /");
			}


			require_once(ROOT. '/view/admin/galereya/view.php');

			return true;
		}
		function ActionServices()
		{
			$userId = User::checkLogged();

			$user = User::getUser($userId);

			if(User::IsNotAdmin()){
				header("location: /");
			}


			require_once(ROOT. '/view/admin/services/view.php');

			return true;
		}
		function ActionAkcyi()
		{
			$userId = User::checkLogged();

			$user = User::getUser($userId);

			if(User::IsNotAdmin()){
				header("location: /");
			}


			require_once(ROOT. '/view/admin/akcyi/view.php');

			return true;
		}

		function ActionContact()
		{
			$userId = User::checkLogged();

			$user = User::getUser($userId);

			if(User::IsNotAdmin()){
				header("location: /");
			}


			require_once(ROOT. '/view/admin/contact/view.php');

			return true;
		}

		function ActionOtziv()
		{
			$userId = User::checkLogged();

			$user = User::getUser($userId);

			if(User::IsNotAdmin()){
				header("location: /");
			}


			require_once(ROOT. '/view/admin/otziv/view.php');

			return true;
		}
	}
 ?>