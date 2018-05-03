<?php 
	include('/template/header.php');
 ?>
 	<div class="container">
 		<h1>Категории</h1>
 		<div class="row">
 			<div class="col-md-3">
				<?php foreach ($list as $value):?>
					<li><a href="/category/<?=$value['id'] ?>"><?=$value['name']; ?></a></li>
			 	<?php endforeach; ?>
				</ul>
		</div>
		<div class="col-md-9">
			<ul>
				<?php foreach ($serviceslist as $value):?>
					<div class="row">
						<div class="col-md-12">
						<h3><li><a href="/services/<?=$value['id'] ?>"><?=$value['title']; ?></a></li></h3>
					<p><?=$value['discription']; ?></p>
					</div>
					</div>
					<hr>
			 	<?php endforeach; ?>
			</ul>
		</div>
 		</div>
 	</div>
	 	
 <?php 
	include('/template/footer.php');
 ?>