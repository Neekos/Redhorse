<?php 

Class reviewController {

		public $data = 'Данные';
	
		public function actionIndex()
		{
			$messages = [];
			$messages = review::getreview();
			$this->data = $messages;
			if (!empty($_POST)) {
					$data = [];

					if (!empty($_POST['username'])) {
						$data['username'] = $_POST['username'];
					}
					if (!empty($_POST['msg'])) {
						$data['msg'] = $_POST['msg'];
					}
					if (isset($data['username']) && isset($data['msg'])) {
						review::insertreview($data);
					}
				}
				;
				
			require_once (ROOT.'/view/review/review.php');
			return true;
		}

		public function actionshow()
		{
			$messages = [];
			$messages = review::getreview();

			require_once (ROOT.'/view/review/show.php');
			return true;
			
		}

	}


?>