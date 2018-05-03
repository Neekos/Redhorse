<?php 

class User {
	public static function register($name,$surname,$middlename,$email,$telephon,$password)
	{
		$db = Db::getConnection();
		$sql = 'INSERT INTO user (name, surname, middlename, email, telephon, password) VALUES (:name, :surname, :middlename, :email, :telephon, :password)';
		$pass=md5($password);
		$result = $db->prepare($sql);
		$result->bindParam(':name', $name, PDO::PARAM_STR);
		$result->bindParam(':surname', $surname, PDO::PARAM_STR);
		$result->bindParam(':middlename', $middlename, PDO::PARAM_STR);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->bindParam(':telephon', $telephon, PDO::PARAM_STR);
		$result->bindParam(':password', $pass, PDO::PARAM_STR);
		
		return $result->execute();
		
	}
	public static function checkName($name) 
	{
		if(strlen($name)>=2) {
			return true;
		}
		return false;
	}
	public static function checkPassword($password) 
	{
		if(strlen($password)>=4) {
			return true;
		}
		return false;
		
	}
	public static function confirmPassword($password)
	{
		if($password==$_POST['password-confirm'])
			return true;
		return false;	
	}
	public static function checkEmail($email) 
	{
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return true;
		}
		return false;
	}

	public static function checkLoginExists($email) 
	{
		$db = Db::getConnection();
		$sql = 'SELECT COUNT(*) FROM user WHERE email = :email';

		$result = $db->prepare($sql);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->execute();

			if($result->fetchColumn())
				return true;
			return false;
	}
	public static function checkUserData($email, $password)
	{
		$db = Db::getConnection();
		$sql = 'SELECT * FROM user WHERE email = :email AND password = :password';
		$pass = md5($password);
		$result = $db->prepare($sql);
		$result->bindParam(':email', $email, PDO::PARAM_INT);
		$result->bindParam(':password', $pass, PDO::PARAM_INT);
		$result->execute();

		$user = $result->fetch();
		if($user) {
			return $user['id'];
		}

		return false;
	}
	public static function auth($userID)
	{
		
		$_SESSION['user'] = $userID;
	}
	public static function checkLogged()
	{
		

		if(isset($_SESSION['user'])) {
			return $_SESSION['user'];
		}
		

		header("Location: /user/login");
	}
	public static function isGuest()
	{
		if(isset($_SESSION['user'])){
			return false;	
		}
		return true;		
	}
	public static function getUser($id)
	{
		$db = Db::getConnection();
		$sql = 'SELECT * FROM user WHERE id = :id';

		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);

		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();

		return $result->fetch();
	}

	public static function userEdit(){

		
	}
	public static function IsNotAdmin()
	{
		if(isset($_SESSION['admin'])){
			return false;			
		}
		return true;
		
	}
}


?>
