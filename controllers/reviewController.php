<?php 

Class reviewController {
	public function actionIndex()
	{
		
		$username = $_REQUEST['username'];
		$msg = $_REQUEST['msg'];
		$action = $_REQUEST['action'];

		if ($action == 'add') {
			review::insertreview();
		}

		
		$message = review::getreview($id = false);

		var_dump($message);

		require_once (ROOT.'/view/review/review.php');
		return true;
	}
}


?>