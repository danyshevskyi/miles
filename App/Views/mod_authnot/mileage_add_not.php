<div class="modal fade" tabindex="-1" id="mod_miles_add_not">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">  
        <h5 class="modal-title">Додати пробіг</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
<div class="modal-body">
    <form action="../ai/" method="POST">
        <input type="hidden" name="key_mod_mileage_add" value="1">
<div class="form-floating mb-3">
  <input type="date" class="form-control" id="floatingInput" name="date_m" required>
    <label for="floatingInput">Виберіть дату</label>
        </div>
<div class="form-floating mb-3">
  <input type="tel" class="form-control" id="floatingPassword" name="my_m">
    <label for="floatingPassword">Мій пробіг, в км</label>
        </div>
<div class="form-floating">
  <input type="tel" class="form-control" id="floatingPassword" name="counted_m">
    <label for="floatingPassword">Врахований пробіг, в км</label>
        </div>
<div id='addMileageComment' class='form-text note'>&#10004; Якщо немає даних по одному з пробігів, поле можно залишити пустим й додати його пізніше в історії.
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-outline-secondary" id="butBack" data-bs-toggle="modal" data-bs-target="#modHistory_not">Назад
    </button>

&nbsp;
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modLogin" onclick="pressReg()">
    Зберегти</button>   
            </div>
            </form>
        </div>
    </div>
</div>