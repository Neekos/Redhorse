<?php 
	


	class ContactController
	{
		
		function ActionContact()
		{
			if (!empty($_POST)) {
				$data = [];

				if (!empty($_POST['name'])) {
					$data['name'] = $_POST['name'];
				}
				if (!empty($_POST['email'])) {
					$data['email'] = $_POST['email'];
				}
				if (!empty($_POST['telephon'])) {
					$data['telephon'] = $_POST['telephon'];
				}
				if (!empty($_POST['message'])) {
					$data['message'] = $_POST['message'];
				}

				if (isset($data['name']) && isset($data['email']) && isset($data['telephon']) && isset($data['message'])) {
					contact::messages($data);
				}
			}



			require_once(ROOT. '/view/contact/contact.php');

			return true;
		}
	}
?>