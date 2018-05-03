<?php 
	include('/template/header.php')
 ?>

 <dib class="container">
 	<div class="row">
 		<h1>Личный кабинет</h1>
 		<h3>Здравствуйте <?=$user['name']; ?> </h3>
 		<section>
 			<div class="info">
 				<ul>
 					<a href="/cabinet/edit/"><li>Редакитровать</li></a>
 				</ul>
 			</div>
 		</section>
 	</div>
 </dib>

 <?php 
	include('/template/footer.php')
 ?>