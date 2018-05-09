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
                                <td ><?=$value1['Nomer'] ?></td>
                                <td ><?=$value1['number'] ?></td>
                                <td ><?=$value1['frost']; ?></td> 
                                <td ><?=$value1['price_weekdays']; ?></td> 
                                <td ><?=$value1['price_weekend']; ?></td>  
                                 
                                <td><button class="btn btn-primary mod" data-product="<?=$value1['Name'];?>" data-val1="<?=$value1['Nomer'];?>" data-val2="<?=$value1['number'];?>" data-val3="<?=$value1['frost'];?>" data-val5="<?=$value1['price_weekend'];?>" data-val4="<?=$value1['price_weekdays'];?>">Записаться</button></td>
                                <td> <a href="/order/"><button class="btn btn-primary order" >заказ</button></a></td>
                            </tr> 
                       
                    </table> 
                </div> 
            </div>
            <p class="desctipt"><?=$value1['Description']; ?></p>
        </div>
    </div>
    <?php endforeach ?>
			
		</div>
 		</div>
 	</div>
    <!-- Modal -->
<div class="modal fade" id="iiiii" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Номер услуги <input type="text" name="val1" id="val1" readonly></input></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <center><h3>Запись</h3></center>
        <center><h3><textarea type="text" name="product" id="product" style="width: 100% ; text-align: center;" readonly rows="4" cols="25"></textarea></h3></center>
      </div>
      <div class="modal-body">
      <form id="buy" method="post">
           <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" name="name" id="name" class="form-control" value="">
                        <span class="help-block"></span>
                    
                </div>
                <div class="form-group">
                    <label for="middlename">Отчество</label>
                    <input type="text" name="middlename" id="middlename" class="form-control" value="">
                        <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" class="form-control" value="">
                        <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label for="telephon">Телефон</label>
                    <input type="tel" name="telephon" id="telephon" class="form-control" value="">
                        <span class="help-block"></span>
                </div>
                <div class="form-group">
                <input type="text" name="val2" id="val2" class="form-control" readonly></input>
                <p>Заморозка: <input type="text" name="val3" id="val3" readonly></input></p>
                
                    <p id="p"><input type="radio" name="product" id="radio1" readonly checked> Будни: <input type="text" name="val4" id="val4" readonly></input></p>
                    <div id="bk">
                    <p><input type="radio" name="product" id="radio2" readonly> Выходные: <input type="text" name="val5" id="val5" readonly> </input></p>    
                    </div>
                    
                        <span class="help-block"></span>
                </div>
                
        <input type="text" name="product" id="product"></input>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary" >Отправить</button>

      </form>
     
      </div>
    </div>
  </div>
</div>
	 	
 <?php 

	include('/template/footer.php');
 ?>