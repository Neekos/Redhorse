<?php  
   class review {
   	public static function getreview($id = false) 
		{
		$db = Db::getConnection();

			$result = $db->query('SELECT * FROM review ORDER BY dat DESC');
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$review = array();

			$i = 0;
			$c=0; 
			while($row = $result->fetch())
			{
				$review[$i]['id'] = $row['id'];
				$review[$i]['username'] = $row['username'];
				$review[$i]['dat'] = $row['dat'];
				$review[$i]['msg'] = $row['msg'];
				
				$i++;

			}
			return $review;
	}

	public static function insertreview() 
		{
		$db = Db::getConnection();

		$sql = 'INSERT INTO review(username, msg) VALUES (:username , :msg)';

		$result = $db->prepare($sql);

		$result->bindParam(':username', $username, PDO::PARAM_STR);
		$result->bindParam(':msg', $msg, PDO::PARAM_STR);

		return $result->execute();
		}


	
}
      
    
      
  
?>



