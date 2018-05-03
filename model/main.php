<?php 
 
class main {

	public static function selectCurrent() 
	{
		$db = Db::getConnection();

			$result = $db->query('SELECT * FROM user');
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$clientList = array();

			$i = 0;

			while($row = $result->fetch())
			{
			
				$clientList[$i]['name'] = $row['name'];
				$i++;

			}
			return $clientList;
	}
	


	
}



?>