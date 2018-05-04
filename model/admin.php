<?php 
	
	class Admin
	{
		public static function photo_get()
		{
			$db = Db::getConnection();
			$photo = [];
			$result = $db->query('SELECT * FROM  image ');

			$i = 0;

			while ($row = $result->fetch()) {
				$photo[$i]['id'] = $row['id'];
				$photo[$i]['title']= $row['title'];
				$photo[$i]['img']= $row['img'];
				$photo[$i]['date_time']= $row['date_time'];
				$i++;
			}
			return $photo;

		}
		
		public static function photo_insert($data)
		{
			$db = Db::getConnection();

			$sql = 'INSERT INTO image (title, img) VALUES (:title, :img)';

			$result = $db->prepare($sql);
			$result->bindParam(':title', $data['title'], PDO::PARAM_STR);
			$result->bindParam(':img', $data['img'], PDO::PARAM_STR);

			$result->execute();

		}
	}
?>