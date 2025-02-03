<div class="modal fade" tabindex="-1" id="modUpdMileages">
  <div class="modal-dialog">
    <div class="modal-content">
<div class="modal-header">  
    <h5 class="modal-title">Редагувати пробіг</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

<div class="modal-body">


<form method="POST" id="formUpdMileages">
    <input type="hidden" name="key" id="keyDelOrUpd">

<div class="form-floating mb-3">
    <input type="date" class="form-control" id="dateUpd" name="date_m" readonly>
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


<input class="form-control mt-3 py-2 fst-italic"
       id="inputComUpd"
       type="text"
       placeholder="Коментар відсутній ..."
       aria-label="default input example"
       name="comment_m">



</div>



<div class="modal-footer">
    <button type="button" class="btn btn-outline-danger ms-0 me-auto" onclick="butDel()">Видалити</button>
        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modMileages">Назад</button>
            <button  type="button" class="btn btn-primary" onclick="butUpd()">Оновити</button>
</div>
    </form>
        </div>
            </div>
</div>