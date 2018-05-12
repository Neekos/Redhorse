<?php include('/template/header.php'); ?>
<!-- Modal -->
<div class="modal fade" id="iiiii" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 <!-- Modal -->
<!-- <div class="modal fade" id="iiiii" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      
     
      </div>
    </div>
  </div>
</div> -->
<?php include('/template/footer.php'); ?>