<?php 
	


	class Category
	{

		const SHOW_BY_DEFAULT = 4;
		
		public static function getCategoryList()
		{
			$db = Db::getConnection();
			
			
			$categoryList = [];
			$result = $db->query('SELECT id, name FROM  category ');

			
			$i = 0;

			while ($row = $result->fetch()) {
				$categoryList[$i]['id'] = $row['id'];
				$categoryList[$i]['name']= $row['name'];
				$i++;
			}
			return $categoryList;
		}

		public static function getCategoryProduct($categoryId, $page = 1){

			$page = intval($page);
			$offset = ($page - 1) * self::SHOW_BY_DEFAULT;

			$db = Db::getConnection();

			$servicesList = [];

			$sql = '
			SELECT 
				* 
			FROM 
				services 
			WHERE 
				parent_id ='.$categoryId
				.' LIMIT '.self::SHOW_BY_DEFAULT
				.' OFFSET '.$offset;
			$result = $db->query($sql);

			$i = 0;

			while ($row = $result->fetch()) {
				$servicesList[$i]['id'] = $row['id'];
				$servicesList[$i]['title']= $row['title'];
				$servicesList[$i]['discription'] = $row['discription'];
				$servicesList[$i]['parent_id'] = $row['parent_id'];
				$i++;
			}
			return $servicesList;
		}

		public static function getTotalProductCategory($categoryId){
			$db = Db::getConnection();

			$result = $db->query('SELECT count(id) as count FROM services WHERE parent_id = '.$categoryId);
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$row = $result->fetch();

			return $row['count'];
		}
	}
 ?>