<div class="modal fade" tabindex="-1" id="modCostsAdd">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">  
        <h5 class="modal-title">Додати витрати</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
<div class="modal-body">
    <!-- <div id="alertCheckDate"></div> -->
    

    <form method="POST" id="form_costs_add">
        <input type="hidden" name="key" value="costsAdd" _id="formKey">
<div class="form-floating mb-3">
  <input type="date" class="form-control" id="inputDate_c" name="date_c" required>
    <label for="floatingInput">Виберіть дату</label>
        </div>
    

    <div class="col">
        <select class="form-select" aria-label="Default select example" id="selCosts" name="costsSel">
            <!-- Option from api -->
                </select>
                    </div>

    <div class="form-floating mt-3">
      <input type="tel" class="form-control" id="inpPriceCosts" name="price">
        <label for="floatingPassword">Сума, в грн</label>
            </div>

    <input class="form-control mt-3 py-2 fst-italic"
           id="inpCommCosts"
           type="text"
           placeholder="Додати коментар ..."
           aria-label="default input example"
           name="comment_c">

</div>




<div class="modal-footer">

    <button type="button"
            class="btn btn-outline-secondary ms-0 me-auto"
            data-bs-toggle="modal"
            data-bs-target="#modCostsAdd"
            onclick="modCosts('show')">
            <i class="bi bi-cash-coin"></i>&nbsp;&nbsp;Витрати авто
    </button>
    
    <button type="button" class="btn btn-primary" id="butCheckDate" onclick="costsAdd()">Зберегти</button>

</div>
    
</form>
        




        </div>
    </div>
</div>