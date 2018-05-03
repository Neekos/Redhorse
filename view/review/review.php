<?php 
	require_once ('template/header.php');

	
 ?>
 <div id="messages">
 	<?php foreach ($message as $value): ?>
 		<h1>Гость:<?=$value['username'] ?></h1>
 		<h1>Написал:<?=$value['msg'] ?></h1>
 		<p>Когда:<?=$value['dat'] ?></p>
 	<?php endforeach ?>

 </div>
 	
 	<form id="myForm">
 		<input id="username">
 		<input id="msg">
 		<input type="submit">
 	</form>
 	
 <?php 
	require_once ('template/footer.php');

	
 ?>