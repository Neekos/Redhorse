<?php 
	include('template/admin/header.php');
	include('template/admin/sidebar.php');
 ?>
 	<div class="col-md-8 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Фотографии
                </div>
                <div class="panel-body">
                    <div class="col-lg-12"> 
                    <div class="table-responsive"> 
                    <table class="table table-bordered table-hover table-striped"> 
                    <thead> 
                    <tr> 
                    <th>№</th> 
                    <th>Заголовок</th> 
                    <th>Время публикации</th> 
                    <th>Фото</th>
                    <th></th>
                    <th></th>  
                    </tr> 
                    </thead> 
                    <tbody> 
                    <?php foreach ($photo as $value): ?>
                    <tr> 
                    <td><?=$value['id'] ?></td>
                    <td><?=$value['title'] ?></td>
                    <td><?=$value['date_time'] ?></td>
                    <td><img src="<?=$value['img'] ?>" style="width: 140px; height: 140px;"></td> 
                    <td> <a href=""><button class="btn btn-primary" >Редактировать </button></a></td>
                    <td> <a href=""><button class="btn btn-primary" >Удалить </button></a></td> 
                    </tr> 
                    <?php endforeach ?>

                    </tbody> 
                    </table> 
                    </div>
                    <a href="/admin/galereya/add/"> <input type="submit" name="add" value="Добавить фото"> </a> 
                    </div> 
                </div>
            </div>
		</div>
 <?php include('template/admin/footer.php'); ?>