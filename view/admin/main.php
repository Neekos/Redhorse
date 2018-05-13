<?php require_once ("/template/admin/header.php"); ?>
<?php require_once ("/template/admin/sidebar.php"); ?>
<div class="col-md-10 content">
             
                    <table class="table table-bordered table-hover table-striped"> 
                    <thead> 
                    <tr> 
                    <th>№</th> 
                    <th>Имя</th> 
                    <th>Email</th> 
                    <th>Телефон</th>
                    <th>Время заказа</th> 
                    <th>Номер заказа</th> 
                    <th>Услуга</th>
                    <th>Абонемет</th>
                    <th>Заморозка</th> 
                    <th>Цена</th> 
                    <th>Статус платежа</th>  
                    <th></th>
                    
                    </tr> 
                    </thead> 
                    <tbody> 
                    <?php foreach ($orders as $value): ?>
                        
                    
                    <tr> 
                    <td><?=$value['id'];?></td> 
                    <td><?=$value['name'];?></td> 
                    <td><?=$value['email'];?></td> 
                    <td><?=$value['telephon'];?></td>
                    <td><?=$value['datetime_order'];?></td>
                    <td><?=$value['val1'];?></td> 
                    <td><?=$value['product'];?></td>
                    <td><?=$value['val2'];?></td> 
                    <td><?=$value['val3'];?></td>
                    <td><?=$value['val6'];?></td>
                    <td><?=$value['status'];?></td> 
                    <td> <a href=""><button class="btn btn-primary" >Написать </button></a></td>
                    
                    </tr> 
                    <?php endforeach ?>

                    </tbody> 
                    </table> 

        <?php 
            include('template/admin/footer.php');
         ?>