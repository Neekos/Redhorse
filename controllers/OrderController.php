<?php
 
class OrderController {


	public function actionIndex()
	{
		$userID = User::checkLogged();
		$orderList = array();
		$orderList = order::selectOrder($userID);
		require_once (ROOT.'/view/order/order.php');
		return true;
	}

	public function actionView($id)
	{
		if($id) {
		$orderView = array();

		$orderView = order::getOrderItemById($id);
		require_once (ROOT.'/view/order/view_order.php');
		print_r($orderView);
		}
		return true;
	}
	public function actionAddorder()
	{
		$userID = User::checkLogged();
		$clientList = array();
		$clientList = order::selectClient($userID);
		$managerList = array();
		$managerList = order::selectManeger();
		$serviceList = array();
		$serviceList = order::selectService();
		$statusList = array();
		$statusList = order::selectStatus();

		$add_order = order::addOrder();
		require_once (ROOT.'/view/order/add_order.php');
		
		return true;
	}
	public function actionRedorder($id)
	{
		
		$userID = User::checkLogged();
		$orderView = array();
		$orderView = order::getOrderItemById($id);
		$clientList = array();
		$clientList = order::selectClient($userID);
		$managerList = array();
		$managerList = order::selectManeger();
		$serviceList = array();
		$serviceList = order::selectService();
		$statusList = array();
		$statusList = order::selectStatus();
		$redOrder = order::redOrder($id);
		require_once (ROOT.'/view/order/red_order.php');
		return true;
			
	}
	public function actionDelorder($id)
	{
		$delOrder = Order::delOrder($id);
				
		
		return true;	
	}
	public function actionReport($id)
	{
		$orderView = order::getOrderItemById($id);
		
		require_once (ROOT.'/view/order/report.php');
		return true;
	}
}
?>