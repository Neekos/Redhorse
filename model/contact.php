<?php 
	/**
	* 
	*/
	class Contact
	{
		
		public static function messages($data){
			$db = Db::getConnection();

			$sql = 'INSERT INTO Contact (name, email, telephon, message) VALUES (:name, :email, :telephon , :message)';

			$result = $db->prepare($sql);
			$result->bindParam(':name', $data['name'], PDO::PARAM_STR);
			$result->bindParam(':email', $data['email'], PDO::PARAM_STR);
			$result->bindParam(':telephon', $data['telephon'], PDO::PARAM_STR);
			$result->bindParam(':message', $data['message'], PDO::PARAM_STR);

			$result->execute();
		}
	}
 ?>