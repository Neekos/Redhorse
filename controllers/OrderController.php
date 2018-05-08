<?php
 
class OrderController {


	public function actionOrder()
	{
		
		require_once (ROOT.'/view/order/order.php');
		return true;
	
	}

	public function actionZapis()
	{
		
		require_once (ROOT.'/view/order/zapis.php');
		return true;
	}
	
}
?>