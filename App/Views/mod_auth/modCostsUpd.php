<div class="modal fade" tabindex="-1" id="modCostsUpd">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">  
        <h5 class="modal-title">Редагувати витрати</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
<div class="modal-body">
    <!-- <div id="alertCheckDate"></div> -->
    

    <form method="POST" id="formCostsUpd">
        <input type="hidden" name="key" id="keyCostsDelOrUpd">

    <input type="hidden" name="idCosts" id="inpIdCosts">


    <div class="form-floating mb-3">
      <input type="date" class="form-control" id="inpDateCostsUpd" name="date_c" required>
        <label for="floatingInput">Виберіть дату</label>
            </div>

    <div class="col">
        <select class="form-select" aria-label="Default select example" id="selCostsUpd" name="costsSel">
            <!-- Option from api -->
                </select>
                    </div>

    <div class="form-floating mt-3">
      <input type="tel" class="form-control" id="inpAmountCostsUpd" name="price">
        <label for="floatingPassword">Сума, в грн</label>
            </div>

    <input class="form-control mt-3 py-2 fst-italic"
           id="inpCommCostsUpd"
           type="text"
           placeholder="Додати коментар ..."
           aria-label="default input example"
           name="comment_c">



</div>


<div class="modal-footer">

    <button type="button" class="btn btn-outline-danger ms-0 me-auto" onclick="butDelCosts()">Видалити</button>
        
        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modCosts">Назад</button>
            
            <button  type="button" class="btn btn-primary" onclick="butUpdCosts()">Оновити</button>
</div>
    
</form>

        </div>
    </div>
</div>