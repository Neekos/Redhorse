<?php
class MainController {


	public function actionIndex()
	{				
		//$userID = User::checkLogged();
		//$clientList = array();
		//$clientList = main::selectCurrent($userID);
		//$taskList = array();
		//$taskList = task::GetTaskList($userID);
		//$count = array();
		//$count = main::selectCount($userID);
		//$countOrder = main::selectCountOrder($userID);
		//$SumOrder = main::selectSumOrder($userID);
		//$orderList = array();
		//$orderList = main::selectOrder($userID);
		//$graph = main::chart($userID);
		


		require_once (ROOT.'/view/main/main.php');
		return true;
	}

}
?>