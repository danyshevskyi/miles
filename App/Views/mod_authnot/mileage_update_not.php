<div class="modal fade" tabindex="-1" id="modMilesUpdate_not">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">  
<h5 class="modal-title">Редагувати пробіг

<?php
    $date_now = getdate();
?>

</h5>

<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

<div class="modal-body">


    <form action="../ai/" method="POST" id="myFormDelPaid">
        <input type="hidden" name="key_mod_mileage_add" value="3">
            <input type="hidden" name="date_m" class="inputEditDel">
                <input type="hidden" name="my_m" value="null">
                    <input type="hidden" name="counted_m" value="null">
              </form>


    <form action="../ai/" method="POST">
        <input type="hidden" name="key_mod_mileage_add" value="2">

<div class="form-floating mb-3">
  <input type="date" class="form-control inputEdit" id="floatingInputDel" name="date_m">
  <label for="floatingInput">Обрана дата</label>
</div>
<div class="form-floating mb-3">
  <input type="tel" class="form-control inputEdit" id="floatingPassword" name="my_m">
  <label for="floatingPassword">Мій пробіг, в км</label>
</div>
<div class="form-floating">
  <input type="tel" class="form-control inputEdit" id="floatingPassword" name="counted_m">
  <label for="floatingPassword">Врахований пробіг, в км</label>
</div>
        </div>

<div class="modal-footer">
    <button type="button" class="btn btn-outline-danger myAlignLeft" data-bs-toggle="modal" data-bs-target="#modLogin" onclick="pressReg()">Видалити</button>
       
        



<button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modHistory_not">
Назад</button>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modLogin" onclick="pressReg()">
Зберегти</button>


   
    </div>
        </form>
            </div>
                </div>
</div>