<?php
class clients {
// запрос на вывод всех клиентов определеного менеджера
	public static function getClientList($id) 
	{
	
			
			$db = Db::getConnection();
			$result = $db->query('SELECT Clients.ID_Clients, Clients.Name, Type_clients.Type, Status_Clients.Status, users.name as manager FROM Clients LEFT JOIN Type_clients ON Clients.ID_Type=Type_clients.ID_type_clients LEFT JOIN Status_Clients ON Clients.ID_status=Status_Clients.ID_Status LEFT JOIN users ON Clients.id_manager=users.id_users WHERE  Clients.id_manager =' .$id);
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

// запрос на вывод одного клиента определеного менеджера
	public static function getClientItemById($id) 
	{
		
		
		$id = intval($id);

		

		if($id) 
		{	
			$db = Db::getConnection();		
			$result = $db->query('SELECT Clients.ID_Clients, Clients.Name, Type_clients.Type, Status_Clients.Status, users.name as manager FROM Clients LEFT JOIN Type_clients ON Clients.ID_Type=Type_clients.ID_type_clients LEFT JOIN Status_Clients ON Clients.ID_status=Status_Clients.ID_Status LEFT JOIN users ON Clients.id_manager=users.id_users WHERE Clients.ID_Clients='. $id);
			

			$clientItem = $result->fetch();
			return $clientItem;
			
		}
		
	}

// запрос на выборку типа клиента
	public static function selectType()
	{
		$db = Db::getConnection();

			$result = $db->query('SELECT * FROM Type_clients');
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$selectType = array();

			$i = 0;

			while($row = $result->fetch())
			{
				$selectType[$i]['ID_type_clients'] = $row['ID_type_clients'];
				$selectType[$i]['Type'] = $row['Type'];
				$i++;

			}
			return $selectType;
	}

// запрос на выборку статуса клиента
	public static function selectStatus()
	{
		$db = Db::getConnection();

			$result = $db->query('SELECT * FROM Status_Clients');
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$selectStatus = array();

			$i = 0;

			while($row = $result->fetch())
			{
				$selectStatus[$i]['ID_Status'] = $row['ID_Status'];
				$selectStatus[$i]['Status'] = $row['Status'];
				$i++;

			}
			return $selectStatus;
	}

// запрос на выборку контактов определенного клиента
	public static function getContactItemById($id) 
	{
		
		
		$id = intval($id);

		
		if($id) 
		{	
			$db = Db::getConnection();		
			$result = $db->query('
				SELECT Contacts.ID_Contact,Contacts.Phone, Contacts.Email, Contacts.id_client,
				Contacts.Contact FROM Contacts LEFT JOIN Clients ON Contacts.id_client=Clients.ID_Clients 
				WHERE Contacts.id_client='.$id
			);
			
			$i = 0;

			$ContactItem = array();
			while($row = $result->fetch())
			{
				$ContactItem[$i]['ID_Contact'] = $row['ID_Contact'];
				$ContactItem[$i]['Phone'] = $row['Phone'];
				$ContactItem[$i]['Contact'] = $row['Contact'];
				$ContactItem[$i]['Email'] = $row['Email'];
				$ContactItem[$i]['id_client'] = $row['id_client'];
				$i++;

			}
			return $ContactItem; 		
			
		}

	}
	// запрос на выборку реквизитов определенного клиента
	public static function getReqItemById($id) 
	{
		
		
		$id = intval($id);

		
		if($id) 
		{	
			$db = Db::getConnection();		
			$result = $db->query('
				SELECT 
				requisite.id_requisite, requisite.legal_adress,requisite.actual_adress,requisite.INN,requisite.KPP,
				requisite.OKPO,requisite.checking_account,requisite.korr_account, bank.name, requisite.BIK 
				FROM requisite LEFT JOIN bank ON requisite.bank=bank.id_bank 
				LEFT join Clients ON requisite.id_client=Clients.ID_Clients WHERE requisite.id_client='. $id
				);
			
			$i = 0;

			$ReqItem= array();
			while($row = $result->fetch())
			{
				$ReqItem[$i]['id_requisite'] = $row['id_requisite'];
				$ReqItem[$i]['legal_adress'] = $row['legal_adress'];
				$ReqItem[$i]['actual_adress'] = $row['actual_adress'];
				$ReqItem[$i]['INN'] = $row['INN'];
				$ReqItem[$i]['KPP'] = $row['KPP'];
				$ReqItem[$i]['OKPO'] = $row['OKPO'];
				$ReqItem[$i]['checking_account'] = $row['checking_account'];
				$ReqItem[$i]['korr_account'] = $row['korr_account'];
				$ReqItem[$i]['name'] = $row['name'];
				$ReqItem[$i]['BIK'] = $row['BIK'];
				$i++;

			}
			return $ReqItem; 		
			
		}
	}
	//функция добавления клиента в базу данных
	public static function addClient(){

		$db = Db::getConnection();

		if (isset($_POST['add_client'])){

			$name = $_POST['name'];
			$type = $_POST['type_client'];
			$status = $_POST['type_status'];
			$id = $_POST['manager'];
		$result = $db->query("INSERT INTO `Clients` (`ID_Clients`,`Name`, `ID_Type`, `ID_status`,`id_manager`) VALUES (Null,'".$name."','".$type."','".$status."','".$id."')");
        
		header("Location: /client/");
		}
		return true;
	}
	//функция редактирования клиента в базе данных 
	public static function redClient($id)
	{
		$id = intval($id);	
		if($id)	{
	 	if (isset($_POST['red_client'])){
	 	$db = Db::getConnection();	
	 	$name = $_POST['name1'];
	 	$type = $_POST['type_client1'];
		$status = $_POST['type_status1'];		
		$result = $db->query('UPDATE `CRM_WebTolk`.`Clients` SET `Name` = "'.$name.'", `ID_Type` = "'.$type.'", `ID_status` = "'.$status.'" WHERE `clients`.`ID_Clients` = '.$id);

		header("Location: /client/");
		}
		return true;
		} 	
	}
	//функция удаления клиента из базы данных 
	public static function delClient($id)
	{
		$id = intval($id);	
		if($id)	{
		$db = Db::getConnection();
		$result = $db->query('DELETE FROM `Clients` WHERE `Clients`.`ID_Clients` ='.$id);
		header("Location: /client/");
		}
		return true;
	}
	//функция добавления контакта в базу данных 
	public static function addContact($id)
	{
		$id = intval($id);	
		if($id)	{
		if (isset($_POST['add_contact'])){
		$c1 = $_POST['Contact']; 
		$c2 = $_POST['Phone'];
		$c3 = $_POST['Email'];
		$c4 = $id;
		$db = Db::getConnection();
		$result = $db->query("INSERT INTO `Contacts` (`ID_Contact`, `Contact`, `Phone`, `Email`, `id_client`) VALUES (NULL, '".$c1."', '".$c2."', '".$c3."', '".$c4."');");
		header("Location: /client/$id");
		}
		return true;
		}
	}
	//функция выборки одного контакта из базы данных
	public static function getContact($id) 
	{
		
		
		$id = intval($id);

		

		if($id) 
		{	
			$db = Db::getConnection();		
			$result = $db->query('
				SELECT Contacts.ID_Contact,Contacts.Phone, Contacts.Email, Contacts.id_client,
				Contacts.Contact FROM Contacts LEFT JOIN Clients ON Contacts.id_client=Clients.ID_Clients 
				WHERE Contacts.ID_Contact='.$id
			);
			

			$clientItem = $result->fetch();
			return $clientItem;
			
		}
		
	}
//функция вредактирования контакта в базе данных
	public static function redContact($id)
	{
		$id = intval($id);	
		if($id)	{
		if (isset($_POST['red_contact'])){
		$db = Db::getConnection();
		$c1 = $_POST['Contact1']; 
		$c2 = $_POST['Phone1'];
		$c3 = $_POST['Email1'];
		$c4 = $_POST['client'];		
		$result = $db->query('UPDATE `CRM_WebTolk`.`Contacts` SET `Contact` = "'.$c1.'", `Phone` = "'.$c2.'", `Email` = "'.$c3.'" WHERE `Contacts`.`ID_Contact` ='.$id);
		header("Location: /client/$c4");
		return true;
	
		}
		}
		
	}
	//выборка записей банков из базы данных
	public static function getBank() 
	{
		$db = Db::getConnection();		
			$result = $db->query('
				SELECT * FROM bank'
			);
			$bankItem= array();
			$i = 0;
			while($row = $result->fetch())
			{
				$bankItem[$i]['id_bank'] = $row['id_bank'];
				$bankItem[$i]['name'] = $row['name'];
				$i++;

			}
			return $bankItem;
			
	}
	// получение реквизита
	public static function getReq($id) 
	{
		
		
		$id = intval($id);

		

		if($id) 
		{	
			$db = Db::getConnection();		
			$result = $db->query('
				SELECT 
				requisite.id_requisite, requisite.legal_adress,requisite.actual_adress,requisite.INN,requisite.KPP,
				requisite.OKPO,requisite.checking_account,requisite.korr_account, bank.name, requisite.BIK, requisite.id_client 
				FROM requisite LEFT JOIN bank ON requisite.bank=bank.id_bank 
				LEFT join Clients ON requisite.id_client=Clients.ID_Clients WHERE requisite.id_requisite='. $id
			);
			

			$reqItem = $result->fetch();
			return $reqItem;
			
		}
		
	}
	//функция добавления в базу данных
	public static function addReq($id)
	{
		if(isset($_POST['add_req'])){
		$db = Db::getConnection();
		$c4 = $id;
		$r1 = $_POST['adress']; 
		$r2 = $_POST['a_adress'];
		$r3 = $_POST['inn'];
		$r4 = $_POST['kapp'];
		$r5 = $_POST['okpo'];
		$r6 = $_POST['check']; 
		$r7 = $_POST['corr'];
		$r8 = $_POST['bank'];
		$r9 = $_POST['BIK'];
		$result = $db->query("INSERT INTO 
			`requisite` (`id_requisite`, `legal_adress`, `actual_adress`, 
			`INN`, `KPP`, `OKPO`, `checking_account`, 
			`korr_account`, `bank`, `BIK`, `id_client`)VALUES (NULL, '".$r1."', '".$r2."',
			'".$r3."', '".$r4."', '".$r5."', '".$r6."', '".$r7."',
			'".$r8."', '".$r9."', '".$c4."');");
		header("Location: /client/$c4");
		}
		return true;

	}
	//функция редактирования реквизитов
	public static function redReq($id)
	{
		if(isset($_POST['red_requsite'])){
		$db = Db::getConnection();
		$r1 = $_POST['adress1']; 
		$r2 = $_POST['a_adress1'];
		$r3 = $_POST['inn1'];
		$r4 = $_POST['kapp1'];
		$r5 = $_POST['okpo1'];
		$r6 = $_POST['check1']; 
		$r7 = $_POST['corr1'];
		$r8 = $_POST['bank1'];
		$r9 = $_POST['BIK1'];
		$r10 = $_POST['client1'];
		$result = $db->query("UPDATE `requisite` SET `legal_adress` = '".$r1."', `actual_adress` = '".$r2."', `INN` = '".$r3."', `KPP`= '".$r4."', `OKPO` = '".$r5."', `checking_account` = '".$r6."', `korr_account` = '".$r7."', `bank` = '".$r8."', `BIK`='".$r9."' WHERE `requisite`.`id_requisite` = '".$id."';");
		header("Location: /client/$r10");
		}
		return true;

	}
	//функция удаления реквизитов
	public static function delReq($id)
	{
		
		$id = intval($id);	
		if($id)	{
		$db = Db::getConnection();
		$result = $db->query('DELETE FROM `requisite` WHERE `requisite`.`id_requisite` ='.$id);
		header("Location: /client/");
		}
		return true;

	}
	//функция удаления контакта
	public static function delContact($id)
	{
		
		$id = intval($id);	
		if($id)	{
		$db = Db::getConnection();
		$result = $db->query('DELETE FROM `Contacts` WHERE `Contacts`.`ID_Contact` ='.$id);
		header("Location: /client/");
		}
		return true;

	}

}
?>