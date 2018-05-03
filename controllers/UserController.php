<?php

class UserController 
{
	public function ActionIndex()
	{
		//$userID = checkLogged();

		require_once (ROOT.'/view/user/login.php');
		return true;
	}
	public function ActionRegistration() 
	{
		$name = '';
		$surname = '';
		$middlename = '';
		$email = '';
		$telephon = '';
		$password = '';
		if(isset($_POST['register']))
		{
			$name = $_POST['name'];
			$surname = $_POST['surname'];
			$middlename = $_POST['middlename'];
			$email = $_POST['email'];			
			$telephon = $_POST['telephon'];
			$password = $_POST['password'];

			$errors = false;

			if(!User::checkName($name)) 
			{
				$errors[] = 'Имя не должно быть короче 2 символов';
			}
			if(!User::checkName($surname)) 
			{
				$errors[] = 'Логин не должно быть короче 2 символов';
			}
			if(!User::checkPassword($password)) 
			{
				$errors[] = 'Пороль не должнен быть короче 6 символов';
			}
			if(!User::checkEmail($email)) 
			{
				$errors[] = 'E-mail неправильный';
			}
			if(User::checkLoginExists($email)) 
			{
				$errors[] = 'Данный E-mail уже зарегистрирован';
			}
			
			
			if($errors == false) 
			{
				$result = User::register($name,$surname,$middlename,$email,$telephon,$password);
				
			}

		}
		require_once (ROOT.'/view/user/register.php');
		return true;
	}
	public function ActionLogin()
	{
		$email = '';
		$password = '';

		if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$errors = false;

			if(!User::checkLoginExists($email)){
				$errors[] = 'Логин не должно быть короче 2 символов';
			}
			if(!User::checkPassword($password)) 
			{
				$errors[] = 'Пороль не должнен быть короче 4 символов';
			}

			$userID = User::checkUserData($email, $password);

			if($userID == false) {
				$errors[] = 'Логин или пароль неверны!';
			} else {

				User::auth($userID);
				$Id = User::checkLogged();

			
				$user=User::getUser($Id);
				if($user['role']==1) {
				$_SESSION['admin']=$user['role'];
				}
				header("Location: /");
			}

		}
		require_once (ROOT.'/view/user/login.php');
		return true;
	}
	public function ActionLogout()
	{
		unset($_SESSION['user']);
		unset($_SESSION['admin']);
		header("Location: / ");

	}

	

}


?>