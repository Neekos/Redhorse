<?php 
	include('/template/header.php');
 ?>
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
           <h3><?=$product['0']['Name']; ?></h3> 
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
                        <?php foreach ($product as $value): ?>
                            <tr> 
                                <td><?=$value['Nomer'] ?></td>
                                <td><?=$value['number'] ?></td>
                                <td><?=$value['frost']; ?></td> 
                                <td><?=$value['price_weekdays']; ?></td> 
                                <td><?=$value['price_weekend']; ?></td>  
                                 
                                <td> <a href="/zapis/"><button class="btn btn-primary" >Записаться</button></a></td>
                            </tr> 
                        <?php endforeach; ?> 
                    </table> 
                </div> 
            </div>
            <p><?=$product['0']['Description']; ?></p>
        </div>
    </div>
</div>

<?php 
	include('/template/footer.php');
 ?>