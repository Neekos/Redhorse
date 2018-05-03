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


	
}
      
    
      
  
?>



