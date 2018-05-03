<?php 

Class reviewController {

	public function actionIndex()
	{
		
		$message = review::getreview($id = false);
		require_once (ROOT.'/view/review/review.php');
		return true;
	}

	public function actionAdd() {

			$username = $_REQUEST['username'];
			$msg = $_REQUEST['msg'];
			$action = $_REQUEST['action'];
			if ($action == 'add') {
			review::insertreview();
		}
	}
}


?>