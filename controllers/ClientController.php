<?php
class ClientController {

	public function actionIndex() {
		$userID = User::checkLogged();
		$getUser = User::getUser($userID);

		$clientList = array();
		$clientList = clients::getClientList($userID);

		require_once (ROOT.'/view/client/clients.php');
		
		return true;
	}

	public function actionView($id) {
		
		if($id) {
			$userID = User::checkLogged();
			$getUser = User::getUser($userID);
			$clientItem = array();	
			$clientItem = clients::getClientItemById($id);

			$ContactItem = array();
			$ContactItem = clients::getContactItemById($id);

			$ReqItem = array();
			$ReqItem = clients::getReqItemById($id);

			require_once (ROOT.'/view/client/view.php');

			
		}
		

		return true;
	}

	public function actionAddclient() {
		$userID = User::checkLogged();
		$selectType = array();
		$selectType = clients::selectType();

		$selectStatus = array();
		$selectStatus = clients::selectStatus();

		$addClient = clients::addClient();
		
		require_once (ROOT.'/view/client/addclient.php');
		
		return true;
	}
	public function actionRedclient($id) {
		$userID = User::checkLogged();
		$clientItem = array();	
		$clientItem = clients::getClientItemById($id);

		$selectType = array();
		$selectType = clients::selectType();

		$selectStatus = array();
		$selectStatus = clients::selectStatus();
		$redClient = clients::redClient($id);
		require_once (ROOT.'/view/client/red_client.php');
		
		return true;
	}
	public function actionDelclient($id) {
		$delClient = clients::delClient($id);
				
		return true;
	}
	public function actionAddcontact($id) {
		$userID = User::checkLogged();
		$getUser = User::getUser($userID);
		if($id) {
		$addClient = clients::addContact($id);
		require_once (ROOT.'/view/client/add_contact.php');
		}		
		return true;
	}
	public function actionRedcontact($id) {
		$userID = User::checkLogged();
		$getUser = User::getUser($userID);
		if($id){
		$ContactItem2 = array();
		$ContactItem2 = clients::getContact($id);
		
						
		$redClient = clients::redContact($id);
		require_once (ROOT.'/view/client/red_contact.php');
		return true;
		}	
	}
	public function actionAddreq($id) {
		$userID = User::checkLogged();
		$getUser = User::getUser($userID);
		if($id) {
		$bankItem = array();
		$bankItem=clients::getBank();
		$addReq=clients::addReq($id);
		require_once (ROOT.'/view/client/add_req.php');
		return true;
		}
	}
	public function actionRedreq($id) {
		$userID = User::checkLogged();
		$getUser = User::getUser($userID);

		if($id) {
		$reqItem = array();
		$reqItem =clients::getReq($id);
		$bankItem = array();
		$bankItem=clients::getBank();
		$addReq=clients::addReq($id);
		$redReq=clients::redReq($id);
		require_once (ROOT.'/view/client/red_req.php');
		return true;
		}
	}
	public function actionDelreq($id) {
		if($id) {
		$delReq=clients::delReq($id); 
		require_once (ROOT.'/view/client/red_req.php');
		return true;
		}
	}
	public function actionDelcontact($id) {
		if($id) {
		$delReq=clients::delContact($id); 
		return true;
		}
	}		
}	
		
		




?>