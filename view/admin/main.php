<?php require_once ("/template/admin/header.php"); ?>
<?php require_once ("/template/admin/sidebar.php"); ?>
<div class="col-md-8 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Заказы
                </div>
                <div class="panel-body">
                    <div class="col-lg-12"> 
                    <div class="table-responsive"> 
                    <table class="table table-bordered table-hover table-striped"> 
                    <thead> 
                    <tr> 
                    <th>№</th> 
                    <th>Фамилия</th> 
                    <th>Имя</th> 
                    <th>Отчество</th> 
                    <th>Телефон</th> 
                    <th>email</th> 
                    <th>Статус</th> 
                    <th></th>  
                    <th></th>
                    </tr> 
                    </thead> 
                    <tbody> 
                    
                    <tr> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td> <a href=""><button class="btn btn-primary" >Написать </button></a></td>
                    <td> <a href=""><button class="btn btn-primary" >Поддтвердить </button></a></td> 
                    </tr> 
                    

                    </tbody> 
                    </table> 
                    </div> 
                    </div> 
                </div>
            </div>
		</div>

		<div class="col-md-8 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    пользователи
                </div>
                <div class="panel-body">
                    <div class="col-lg-12"> 
                    <div class="table-responsive"> 
                    <table class="table table-bordered table-hover table-striped"> 
                    <thead> 
                    <tr> 
                    <th>№</th> 
                    <th>Фамилия</th> 
                    <th>Имя</th> 
                    <th>Отчество</th> 
                    <th>Телефон</th> 
                    <th>email</th>  
                    <th></th>  
                    </tr> 
                    </thead> 
                    <tbody> 
                   
                    <tr> 
                    <td></td>    
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td> 
                     
                    <td> <a href=""><button class="btn btn-primary" >Написать </button></a></td> 
                    </tr> 
                    

                    </tbody> 
                    </table> 
                    </div> 
                    </div> 
                </div>
            </div>
		</div>

        <?php 
            include('template/admin/footer.php');
         ?>