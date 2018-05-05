<?php  
   class review {
   	public static function getreview() 
		{
		$db = Db::getConnection();

			$result = $db->query('SELECT * FROM review ORDER BY dat DESC');
			$review = [];

			$i = 0;

			while ($row = $result->fetch()) {
				$review[$i]['id'] = $row['id'];
				$review[$i]['username']= $row['username'];
				$review[$i]['dat']= $row['dat'];
				$review[$i]['msg']= $row['msg'];
				$i++;
			}
			return $review;
	}

	public static function insertreview($data) 
		{
		$db = Db::getConnection();

		$sql = 'INSERT INTO review( username, msg) VALUES (:username , :msg)';

			$result = $db->prepare($sql);
			$result->bindParam(':username', $data['username'], PDO::PARAM_STR);
			$result->bindParam(':msg', $data['msg'], PDO::PARAM_STR);
			$result->execute();

		return $result->execute();
		}


	
}
      
    
      
  
?>



