<?php

class order {
	
	public static function selectOrder($id) 
		{
		$db = Db::getConnection();

			$result = $db->query('SELECT Orders.ID_Orders, Orders.№_Orders, Clients.Name as Client, users.name as Managers,Order_status.name as status_order, Services.Name as usluga, Orders.Date_Begining, Orders.Date_ending, Orders.Data_order, Orders.Price FROM Orders LEFT JOIN users ON Orders.Managers=users.id_users
				left join Clients ON Orders.ID_Clients=Clients.ID_Clients 
				LEFT join Services ON Orders.ID_Service = Services.ID_Services
				LEFT JOIN Order_status ON Orders.Status_order=Order_status.ID_Order_status WHERE Orders.Managers='.$id);
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$orderList = array();

			$i = 0;

			while($row = $result->fetch())
			{
				$orderList[$i]['ID_Orders'] = $row['ID_Orders'];
				$orderList[$i]['№_Orders'] = $row['№_Orders'];
				$orderList[$i]['Client'] = $row['Client'];
				$orderList[$i]['Managers'] = $row['Managers'];
				$orderList[$i]['status_order'] = $row['status_order'];
				$orderList[$i]['usluga'] = $row['usluga'];
				$orderList[$i]['Date_Begining'] = $row['Date_Begining'];
				$orderList[$i]['Date_ending'] = $row['Date_ending'];
				$orderList[$i]['Data_order'] = $row['Data_order'];
				$orderList[$i]['Price'] = $row['Price'];
				$i++;

			}
			return $orderList;
	}
	public static function getOrderItemById($id) 
	{
		
		
		$id = intval($id);

		

		if($id) 
		{	
			$db = Db::getConnection();		
			$result = $db->query('SELECT Orders.ID_Orders, Orders.№_Orders, Clients.Name as Client, users.name as Managers,Order_status.name as status_order, Services.Name as usluga, Orders.Date_Begining, Orders.Date_ending, Orders.Data_order, Orders.Price FROM Orders LEFT JOIN users ON Orders.Managers=users.id_users
				left join Clients ON Orders.ID_Clients=Clients.ID_Clients 
				LEFT join Services ON Orders.ID_Service = Services.ID_Services
				LEFT JOIN Order_status ON Orders.Status_order=Order_status.ID_Order_status WHERE Orders.ID_Orders='. $id);
			

			$OrderView = $result->fetch();
			
			
		}
		return $OrderView;
	}
	public static function selectClient($id) {
	
			
			$db = Db::getConnection();
			$result = $db->query('SELECT * FROM Clients,Type_clients,Status_Clients WHERE Clients.ID_Type=Type_clients.ID_type_clients AND Clients.ID_status=Status_Clients.ID_Status AND Clients.id_manager =' .$id);
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$clientList = array();

			$i = 0;

			while($row = $result->fetch())
			{
				$clientList[$i]['ID_Clients'] = $row['ID_Clients'];
				$clientList[$i]['Name'] = $row['Name'];
				$clientList[$i]['Type'] = $row['Type'];
				$clientList[$i]['Status'] = $row['Status'];
				$i++;

			}
			return $clientList;
			
	}
	public static function selectManeger()
	{
		$db = Db::getConnection();

			$result = $db->query('SELECT id_users, name FROM users');
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$managerList = array();

			$i = 0;

			while($row = $result->fetch())
			{
				$managerList[$i]['id_users'] = $row['id_users'];
				$managerList[$i]['name'] = $row['name'];
				$i++;

			}
			return $managerList;	
	}
	public static function selectService()
	{
		$db = Db::getConnection();

			$result = $db->query('SELECT * FROM Services');
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$serviceList = array();

			$i = 0;

			while($row = $result->fetch())
			{
				$serviceList[$i]['ID_Services'] = $row['ID_Services'];
				$serviceList[$i]['Name'] = $row['Name'];
				$i++;

			}
			return $serviceList;	
	}
	public static function selectStatus()
	{
		$db = Db::getConnection();

			$result = $db->query('SELECT * FROM Order_status');
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$statusList = array();

			$i = 0;

			while($row = $result->fetch())
			{
				$statusList[$i]['ID_Order_status'] = $row['ID_Order_status'];
				$statusList[$i]['name'] = $row['name'];
				$i++;

			}
			return $statusList;	
	}
	public static function addOrder(){

		$db = Db::getConnection();
		if (isset($_POST['add_order'])){

			$o1 = $_POST['number'];
			$o2 = $_POST['client'];
			$o3 = $_POST['manager'];
			$o4 = $_POST['service'];
			$o5 = $_POST['date_b'];
			$o6 = $_POST['date_e'];
			$o7 = $_POST['date_o'];
			$o8 = $_POST['status'];
			$o9 = $_POST['price'];

		$result = $db->query("INSERT INTO `Orders` (`ID_Orders`, `№_Orders`, `ID_Clients`, `Managers`, `ID_Service`, `Date_Begining`, `Date_ending`, `Data_order`, `Status_order`, `Price`) VALUES (NULL, '".$o1."', '".$o2."', '".$o3."', '".$o4."', '".$o5."', '".$o6."', '".$o7."', '".$o8."', '".$o9."');");

		header("Location: /order/");
		}
		return true;
	} 
	public static function redOrder($id)
	{
		$id = intval($id);	
		if($id)	{

		$db = Db::getConnection();
		if (isset($_POST['red_order'])){

			$o1 = $_POST['number1'];
			$o2 = $_POST['client1'];
			$o4 = $_POST['service1'];
			$o5 = $_POST['date_b1'];
			$o6 = $_POST['date_e1'];
			$o7 = $_POST['date_o1'];
			$o8 = $_POST['status1'];
			$o9 = $_POST['price1'];

		$result = $db->query("UPDATE `Orders` SET `№_Orders`='".$o1."',`ID_Clients` ='".$o2."', `ID_Service` = '".$o4."', `Date_Begining` = '".$o5."', `Date_ending` = '".$o6."', `Data_order` = '".$o7."', `Status_order` = '".$o8."', `Price` = '".$o9."' WHERE `Orders`.`ID_Orders` = '".$id."';");

		header("Location: /order/");
		}
		return true;
		}
	}
	public static function delOrder($id) {
		$id = intval($id);	
		if($id)	{
			$db = Db::getConnection();
		$result = $db->query('DELETE FROM `Orders` WHERE `Orders`.`ID_Orders` = "'.$id.'"');
		header("Location: /order/");

		}
		return true;
	}
}


?>