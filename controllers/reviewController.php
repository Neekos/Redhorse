<?php 

Class reviewController {
	public function actionIndex()
	{
		


		//$message = [];
		$message = review::getreview($id = false);

		//var_dump($message);

		require_once (ROOT.'/view/review/review.php');
		return true;
	}
}


?>