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
                            
                        <tr>
                       
                            <tr> 
                                <td ><?=$value1['Nomer'] ?></td>
                                <td ><?=$value1['number'] ?></td>
                                <td ><?=$value1['frost']; ?></td> 
                                <td ><?=$value1['price_weekdays']; ?></td> 
                                <td ><?=$value1['price_weekend']; ?></td>  
                                <td><button class="btn btn-primary mod" data-product="<?=$value1['Name'];?>" data-val1="<?=$value1['Nomer'];?>" data-val2="<?=$value1['number'];?>" data-val3="<?=$value1['frost'];?>" data-val5="<?=$value1['price_weekend'];?>" data-val4="<?=$value1['price_weekdays'];?>" data-noname="Неизвестный">Заказать</button></td>
                                
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
      <form id="form" >
        <h5 class="modal-title" id="exampleModalLabel">Номер услуги <input type="text" name="val1" id="val1" readonly></input></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <center><h3>Запись</h3></center>
        <center><h3><textarea type="text" name="product" id="product" style="width: 100% ; text-align: center;" readonly rows="4" cols="25"></textarea></h3></center>
      </div>
      <?php var_dump($data); ?>
      <div class="modal-body">
      
           <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?=$name ?>">
                        <span class="help-block"></span>
                    
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?=$email ?>">
                        <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label for="telephon">Телефон</label>
                    <input type="tel" name="telephon" id="telephon" class="form-control" value="<?=$telephon ?>">
                        <span class="help-block"></span>
                </div>
                <div class="form-group">
                <input type="text" name="val2" id="val2" class="form-control" readonly></input>
                <p>Заморозка: <input type="text" name="val3" id="val3" readonly></input></p>
                
                    <p id="p"><input type="radio" name="week" id="radio1" value="<?php $val4 ?>" readonly checked> Будни: <input type="text" name="val4" id="val4" readonly></input></p>
                    <div id="bk">
                    <p><input type="radio" name="week" id="radio2" value="<?php $val5 ?>" readonly> Выходные: <input type="text" name="val5" id="val5" readonly> </input></p>    
                    </div>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary" name="order" id="push" data-valprice="<?php $value ?>" >Отправить</button>

      </form>
     
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  
  $('.mod').click(function(){
  var product = $(this).data('product'),
    val1 = $(this).data('val1'),
    val2 = $(this).data('val2'),
    val3 = $(this).data('val3'),
    val4 = $(this).data('val4'),
    val5 = $(this).data('val5');
    
    if (val3 == 0) {
      val3 = "нет";
    };

    if (val5 == '') {
      document.getElementById('bk').style.display = "none"
    }else{
      document.getElementById('bk').style.display = "block"
    }

    $('#product').val(product);
    $('#val1').val(val1);
    $('#val2').val(val2);
    $('#val3').val(val3);
    $('#val4').val(val4);
    $('#val5').val(val5);

    $("#iiiii").modal();
    

    console.log(product, val1, val2, val3, val4 , val5);

    var radio = document.getElementsByName('week');

    for (var i = 0; i < radio.length; i++) {
      radio[i].onchange = testRadio;
    }

    function testRadio(){
      console.log(this.value);
    }

    document.getElementById('push').onclick = checkRadio;

    function checkRadio(){
      var m = document.getElementsByName('week'),
      valprice = $(this).data('valprice');
      for (var i = 0 ; i <m.length; i++) {
        if (m[i].checked) {
          valprice = m[i];
          console.log(product, val1, val2, val3, valprice);
          break;
        }
      }
    }
    return false;   
});
</script>
	 <script type="text/javascript">
      $(document).ready(function(){  
         
        $("#form").submit(function(e){  
            e.preventDefault();
             $.ajax({  
                 type: "POST",  
                 url: "services.php",  
                 data:$(this).serialize()}).done(function(){
           
                    alert("Спасибо за заявку! Скоро мы с вами свяжемся.");

                 }) ; 
              
             return false;  
        });  
          
    });
     </script>	
 <?php 

	include('/template/footer.php');
 ?>