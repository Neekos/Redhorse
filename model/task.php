<?php

class task {
	public static function GetTaskList($id)
	{
		$id = intval($id);

		
		if($id) 
		{
		$db = Db::getConnection();
		$result =$db->query("SELECT task.id_task, task.name as task, task.data, users.name as user, task_status.name FROM task LEFT JOIN users ON task.id_manager=users.id_users LEFT JOIN task_status ON task.status=task_status.id_task_status WHERE task.id_manager=".$id);
		$task[]='';
		$i = 0;
		while($row = $result->fetch())
			{
				$task[$i]['id_task'] = $row['id_task'];
				$task[$i]['task'] = $row['task'];
				$task[$i]['name'] = $row['name'];
				$task[$i]['user'] = $row['user'];
				$task[$i]['data'] = $row['data'];
				$i++;

			}
		return $task;
		}
	}
	public static function SelectTask($id){
		$db = Db::getConnection();
		$result =$db->query("SELECT task.id_task, task.name as task, task.data, users.name as user, task_status.name FROM task LEFT JOIN users ON task.id_manager=users.id_users LEFT JOIN task_status ON task.status=task_status.id_task_status WHERE task.id_task=".$id);
		$task = $result->fetch();
			
		return $task;

	}

	public static function SelectStatus(){
		$db = Db::getConnection();
		$result =$db->query("SELECT * FROM task_status");
		$task[]='';
		$i = 0;
		while($row = $result->fetch())
			{
				$task[$i]['id_task_status'] = $row['id_task_status'];
				$task[$i]['name'] = $row['name'];
				$i++;

			}
		return $task;

	}
	public static function AddTask()
	{
		$db = Db::getConnection();

		if (isset($_POST['add_task'])){

			$name = $_POST['task'];
			$date = $_POST['date'];
			$status = $_POST['task_status'];
			$id = $_POST['manager'];
		$result = $db->query("INSERT INTO `CRM_WebTolk`.`task` (`id_task`, `name`, `data`, `id_manager`, `status`) VALUES (NULL, '".$name."', '".$date."', '".$id."', '".$status."');");

		header("Location: /task/");
		}
		return true;
	}
	public static function redTask($id) 
	{
		intval($id);

		if($id) {

		$db = Db::getConnection();

		if(isset($_POST['red_task'])){
			$name = $_POST['task1'];
			$date = $_POST['date1'];
			$status = $_POST['task_status1'];
			$result= $db->query("UPDATE `CRM_WebTolk`.`task` SET `name` = '".$name."', `data` = '".$date."', `status` = '".$status."' WHERE `task`.`id_task` = ".$id);
			}
		}
	}
	public static function delTask($id)
	{
		$id = intval($id);	
		if($id)	{
			$db = Db::getConnection();
		$result = $db->query('DELETE FROM `task` WHERE `task`.`id_task` = "'.$id.'"');
		header("Location: /task/");

		}
		return true;
	}
}





?>