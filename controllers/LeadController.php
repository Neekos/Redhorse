<?php 

class LeadController {

	public function actionIndex()
	{
		$userID = User::checkLogged();
		$getUser = User::getUser($userID);
		$leadList = lead::selectLead();
		
		require_once (ROOT.'/view/lead/lead.php');
		
		return true;
	}
	public function actionAddlead()
	{
		$userID = User::checkLogged();
		$getUser = User::getUser($userID);
		$addLead = lead::addlead();
		require_once (ROOT.'/view/lead/addlead.php');
	}
	
}

?>