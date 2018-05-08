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
		<?php foreach ($serviceslist as $value1): ?>
			
		
		<div class="panel panel-default">
        <div class="panel-heading">
           <h3><a href="/services/<?=$value1['id'] ?>"><?=$value1['Name']; ?></a></h3> 
        </div>
        <div class="panel-body">
            <div class="col-lg-12"> 
                <div class="table-responsive"> 
                    <table class="table table-bordered table-hover table-striped"> 
                        <tr> 
                            <th>№</th> 
                            <th>Способ оплаты</th>
                            <th>Заморозка</th>  
                            <th>Будни</th>  
                            <th>Выходной</th>
                            <th></th>
                            <th></th>  
                        <tr>
                       
                            <tr> 
                                <td><?=$value1['Nomer'] ?></td>
                                <td><?=$value1['number'] ?></td>
                                <td><?=$value1['frost']; ?></td> 
                                <td><?=$value1['price_weekdays']; ?></td> 
                                <td><?=$value1['price_weekend']; ?></td>  
                                 
                                <td> <a href="/zapis/"><button class="btn btn-primary" >Записаться</button></a></td>
                                <td> <a href="/order/"><button class="btn btn-primary" >заказ</button></a></td>
                            </tr> 
                       
                    </table> 
                </div> 
            </div>
            <p><?=$value1['Description']; ?></p>
        </div>
    </div>
    <?php endforeach ?>
			
		</div>
 		</div>
 	</div>
	 	
 <?php 
	include('/template/footer.php');
 ?>