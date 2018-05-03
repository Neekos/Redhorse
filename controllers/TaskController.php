<?php

class TaskController {

	public function actionIndex()
	{
		$userID = User::checkLogged();
		$task=array();
		$task=task::GetTaskList($userID);
		require_once (ROOT.'/view/task/task.php');
		return true;
	}
	public function actionAddtask()
	{
		$userID = User::checkLogged();
		$getUser = User::getUser($userID);
		$status[]='';
		$status= task::SelectStatus();
		$add_task = task::AddTask();
		

		
		require_once (ROOT.'/view/task/addtask.php');
		return true;
	}
	public function actionRedTask($id){
		$userID = User::checkLogged();
		$getUser = User::getUser($userID); 
		$status = task::SelectStatus();
		$task = task::SelectTask($id);
		$redTask = task::RedTask($id);
		require_once (ROOT.'/view/task/redtask.php');
		return true;
	}
	public function actionDelTask($id){
		$userID = User::checkLogged();
		$getUser = User::getUser($userID);
		$delTask = task::delTask($id);
		return true;
	}
}

?>