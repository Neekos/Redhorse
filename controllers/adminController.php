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

			$news = admin::news_get();
			
			require_once(ROOT. '/view/admin/news/view.php');

			return true;
		}

		function ActionNewsAdd()
		{
			$userId = User::checkLogged();

			$user = User::getUser($userId);

			if(User::IsNotAdmin()){
				header("location: /");
			}

			if (!empty($_POST)) {
				$data = [];

				if (!empty($_POST['title'])) {
					$data['title'] = $_POST['title'];
				}
				if (!empty($_POST['discription'])) {
					$data['discription'] = $_POST['discription'];
				}
				if (!empty($_POST['text'])) {
					$data['text'] = $_POST['text'];
				}

				if (!empty($_FILES)) {
					$res = photo::file_upload('img');
					if (false !== $res) {
						$data['img'] = $res;
					}
				}
				if (isset($data['title']) && isset($data['discription']) && isset($data['text']) && isset($data['img'])) {
					admin::new_insert($data);
					header('location: /admin/news/');
				}
			}

			require_once(ROOT. '/view/admin/news/add.php');

			return true;
		}

		function ActionGalereya()
		{
			$userId = User::checkLogged();

			$user = User::getUser($userId);

			if(User::IsNotAdmin()){
				header("location: /");
			}

			$photo = admin::photo_get();


			require_once(ROOT. '/view/admin/galereya/view.php');

			return true;
		}

		function ActionGalereyaAdd()
		{
			$userId = User::checkLogged();

			$user = User::getUser($userId);

			if(User::IsNotAdmin()){
				header("location: /");
			}

			if (!empty($_POST)) {
				$data = [];

				if (!empty($_POST['title'])) {
					$data['title'] = $_POST['title'];
				}

				if (!empty($_FILES)) {
					$res = photo::file_upload('img');
					if (false !== $res) {
						$data['img'] = $res;
					}
				}
				if (isset($data['title']) && isset($data['img'])) {
					admin::photo_insert($data);
					header('location: /admin/galereya/');
				}
			}

			require_once(ROOT. '/view/admin/galereya/add.php');

			return true;
		}

		function ActionServices()
		{
			$userId = User::checkLogged();

			$user = User::getUser($userId);

			if(User::IsNotAdmin()){
				header("location: /");
			}

			$data4 = Services::getXLS('exceleservices/individzan.xlsx');

				
				$data_res4 =Services::convert_arr($data4, 'id', 0);
				$data_res4 =Services::convert_arr($data4, 'name', 1, $data_res4);
				$data_res4 =Services::convert_arr($data4, 'zam', 2, $data_res4);
				$data_res4 =Services::convert_arr($data4, 'priceone', 3, $data_res4);
				$data_res4 =Services::convert_arr($data4, 'priceonev', 4, $data_res4);
				$data_res4 =Services::convert_arr($data4, 'priceabo', 5, $data_res4);
				$data_res4 =Services::convert_arr($data4, 'priceabov', 6, $data_res4);

			require_once(ROOT. '/view/admin/services/view.php');

			return true;
		}

		function ActionServicesAdd()
		{
			$userId = User::checkLogged();

			$user = User::getUser($userId);

			if(User::IsNotAdmin()){
				header("location: /");
			}


			require_once(ROOT. '/view/admin/services/view.php');

			return true;
		}

		function ActionServicesEdit()
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