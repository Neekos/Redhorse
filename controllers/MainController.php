<?php
class MainController {


	public function actionIndex()
	{				
		$photo = admin::photo_get();
		


		require_once (ROOT.'/view/main/main.php');
		return true;
	}

}
?>