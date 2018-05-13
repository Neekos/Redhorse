<?php 
	
	class Admin
	{
		public static function news_get()
		{
			$db = Db::getConnection();
			$news = [];
			$result = $db->query('SELECT * FROM  article ');

			$i = 0;

			while ($row = $result->fetch()) {
				$news[$i]['id'] = $row['id'];
				$news[$i]['title']= $row['title'];
				$news[$i]['discription']= $row['discription'];
				$news[$i]['text']= $row['text'];
				$news[$i]['img']= $row['img'];
				$news[$i]['date_time']= $row['date_time'];
				$i++;
			}
			return $news;

		}

		public static function new_insert($data){
			$db = Db::getConnection();

			$sql = 'INSERT INTO article (title, discription, text, img) VALUES (:title, :discription, :text , :img)';

			$result = $db->prepare($sql);
			$result->bindParam(':title', $data['title'], PDO::PARAM_STR);
			$result->bindParam(':discription', $data['discription'], PDO::PARAM_STR);
			$result->bindParam(':text', $data['text'], PDO::PARAM_STR);
			$result->bindParam(':img', $data['img'], PDO::PARAM_STR);

			$result->execute();
		}

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

		public static function order_get()
		{
			$db = Db::getConnection();
			$orders = [];
			$result = $db->query('SELECT * FROM  orders ');

			$i = 0;

			while ($row = $result->fetch()) {
				$orders[$i]['id'] = $row['id'];
				$orders[$i]['name']= $row['name'];
				$orders[$i]['email']= $row['email'];
				$orders[$i]['telephon']= $row['telephon'];
				$orders[$i]['product']= $row['product'];
				$orders[$i]['val1']= $row['val1'];
				$orders[$i]['val2']= $row['val2'];
				$orders[$i]['val3']= $row['val3'];
				$orders[$i]['val6']= $row['val6'];
				$orders[$i]['datetime_order']= $row['datetime_order'];
				$orders[$i]['status']= $row['status'];
				$i++;
			}
			return $orders;

		}
	}
?>