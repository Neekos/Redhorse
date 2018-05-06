<?php 
	include('template/admin/header.php');
	include('template/admin/sidebar.php');
 ?>
 	<hr>
     
                <div class="panel-heading">
                    <a href=""><button class="btn btn-primary" > Добавить </button></a>
                </div>
 <div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Катание на лошади или пони по лесу</h3>
                    <h3>Верховые прогулки</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-12"> 
                    <div class="table-responsive"> 
                    <table class="table table-bordered table-hover table-striped"> 
                    <thead> 
                    <tr>
                        <td rowspan="2" >№</td>
                        <td rowspan="2">Абонемент</td>
                        <td rowspan="2">Заморозка</td>
                        <td colspan="2">Стоимость одного занятия</td>
                        <td colspan="2">Стоимость абонемента</td>
                    </tr>
                    <tr>
                        
                        <td>Будни</td>
                        <td>Выходные</td>
                        <td>Будни</td>
                        <td>Выходные</td>
                    </tr>
                    <tr>
                        <td><?=$data_res4['4']['id']; ?></td>
                        <td><?=$data_res4['4']['name']; ?></td>
                        <td><?=$data_res4['4']['zam']; ?></td>
                        <td ><?=$data_res4['4']['priceone']; ?></td>
                        <td ><?=$data_res4['4']['priceonev']; ?></td>
                        <td ><?=$data_res4['4']['priceabo']; ?></td>
                        <td ><?=$data_res4['4']['priceabov']; ?></td>
                    </tr>
                    <tr>
                        <td><?=$data_res4['5']['id']; ?></td>
                        <td><?=$data_res4['5']['name']; ?></td>
                        <td><?=$data_res4['5']['zam']; ?></td>
                        <td colspan="2"><?=$data_res4['5']['priceone']; ?></td>
                        <td colspan="2"><?=$data_res4['5']['priceabo']; ?></td>
                    </tr>
                    <tr>
                        <td><?=$data_res4['6']['id']; ?></td>
                        <td><?=$data_res4['6']['name']; ?></td>
                        <td><?=$data_res4['6']['zam']; ?></td>
                        <td colspan="2"><?=$data_res4['6']['priceone']; ?></td>
                        <td colspan="2"><?=$data_res4['6']['priceabo']; ?></td>
                    </tr>

                    </tbody> 
                    </table> 
                    </div>
                     <td> <a href=""><button class="btn btn-primary" >Редактировать </button></a></td>
                    <td> <a href=""><button class="btn btn-primary" >удалить </button></a></td> 
                    </div> 
                </div>
            </div>
        </div>
 <?php include('template/admin/footer.php'); ?>