<div class="modal fade" tabindex="-1" id="modCalcDeprAdd">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">  
            <h5 class="modal-title">Додати виплати за амортизацію</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
<div class="modal-body">

<div id="alertPaid2"></div>

    <form id="formPaid2">

        <input type="hidden" id="deprKeyHid" name="key">    
            <input type="hidden" id="deprYearHid" name="year_paid">
                <input type="hidden" id="deprMonthHid" name="month_paid">

<div class="form-floating mb-3">
  <input class="form-control" id="deprMonth" readonly>
  <label for="floatingInput">Місяць:</label>
</div>
<div class="form-floating mb-3">
  <input type="tel" class="form-control" id="deprSum" name="paid_depr">
  <label for="floatingPassword">Сума, грн</label>
</div>
        </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger myAlignLeft butDel2" id="deprButDel" onclick="calcButDel('depr')">Видалити</button>

<button type="button" class="btn btn-outline-secondary _centered" data-bs-toggle="modal" data-bs-target="#modCalc">
    Назад</button>
        &nbsp;
<button type="button" class="btn btn-primary" id="butDeprAddOrUpd" onclick=""></button>

</div>
    </form>
        </div> 
               </div>
</div>