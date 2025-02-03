<div class="modal fade" tabindex="-1" id="modAddMileages">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">  
        <h5 class="modal-title">Додати пробіг</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
<div class="modal-body">
    <div id="alertCheckDate"></div>
    

    <form method="POST" id="form_mileage_add">
        <input type="hidden" name="key" value="addMileage_check" id="formKey">
<div class="form-floating mb-3">
  <input type="date" class="form-control" id="inputDate" name="date_m" required>
    <label for="floatingInput">Виберіть дату</label>
        
        </div>
        
<div class="form-floating mb-3">
  <input type="tel" class="form-control" id="inputMyM" name="my_m">
    <label for="floatingPassword">Мій пробіг, в км</label>
        </div>

<div class="form-floating">
  <input type="tel" class="form-control" id="inputCountM" name="counted_m">
    <label for="floatingPassword">Врахований пробіг, в км</label>
        </div>



<input class="form-control mt-3 py-2 fst-italic" id="inputComAdd" type="text" placeholder="Додати коментар ..." aria-label="default input example" name="comment_m">




<div id='addMileageComment' class='form-text note'>&#10004; Якщо немає даних по одному з полів, можно залишити їх пустими й додати пізніше в історії натиснувши на відповідний рядок.
</div>
</div>

<div class="modal-footer">
<button type="button"
        class="btn btn-outline-secondary ms-0 me-auto"
        data-bs-toggle="modal"
        data-bs-target="#modAddMileages"
        onclick="showMileages('currentMonth')"><i class="bi bi-speedometer2 pe-2"></i>Мої пробіги
    </button>
        
        <button type="button" class="btn btn-primary" id="butCheckDate" onclick="butSaveOrUpdMileages()">Зберегти</button>
            </div>
            
            </form>
        </div>
    </div>
</div>