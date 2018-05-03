<?php 
	include('/template/header.php');
 ?>
<div class="col-md-12 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php foreach ($product as $value): ?>
                        <?php echo $value['Name']; ?>
                    <?php endforeach ?>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12"> 
                    <div class="table-responsive"> 
                    <table class="table table-bordered table-hover table-striped"> 
                    <thead> 
                    <tr> 
                    <th>№</th> 
                    <th>Время</th> 
                    <th>Стоимость</th> 
                     
                    <th></th>  
                    </tr> 
                    </thead> 
                    <tbody> 
                   <?php foreach ($product as $value): ?>
                    <tr> 
                   
                    <td><?=$value['id'] ?></td>
                    <td><?=$value['Time'] ?></td>
                    </td><td><?=$value['Price']; ?> 
                     
                    <td> <a href="/zapis/"><button class="btn btn-primary" >Записаться</button></a></td>
                    <a href="/zapis/">Записаться</a> 
                    </tr> 
                    <?php endforeach; ?>

                    </tbody> 
                    </table> 
                    </div> 
                    </div> 
                </div>
            </div>
		</div>

<?php 
	include('/template/footer.php');
 ?>