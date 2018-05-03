<?php

class lead {

	public static function selectLead()
	{
		$db = Db::getConnection();
			$result = $db->query('SELECT leads.id_lead, leads.surname, leads.firstname, leads.lastname, leads.contact, leads.comment FROM leads LEFT JOIN users ON leads.id_manager=users.id_users');
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$leadList = array();

			$i = 0;

			while($row = $result->fetch())
			{
				$leadList[$i]['id_lead'] = $row['id_lead'];
				$leadList[$i]['surname'] = $row['surname'];
				$leadList[$i]['firstname'] = $row['firstname'];
				$leadList[$i]['lastname'] = $row['lastname'];
				$leadList[$i]['contact'] = $row['contact'];
				$leadList[$i]['comment'] = $row['comment'];
				$i++;

			}
			return $leadList;
	}
	
}

?>