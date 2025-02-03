<div class="modal fade" tabindex="-1" id="modCalcFuelAdd">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">  
            <h5 class="modal-title">Додати виплати за паливо</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
<div class="modal-body">

<div id="alertPaid"></div>
    <form id="formPaid">

        <input type="hidden" name="key" id="fuelKeyHid">    
            <input type="hidden" id="fuelYearHid" name="year_paid">
                <input type="hidden" id="fuelMonthHid" name="month_paid">

<div class="form-floating mb-3">
  <input class="form-control" id="fuelMounth" disabled>
  <label for="floatingInput">Місяць:</label>
</div>
<div class="form-floating mb-3">
  <input type="tel" class="form-control" id="fuelSum" name="paid">
  <label for="floatingPassword">Сума, грн</label>
</div>
        </div>
    <div class="modal-footer">

<button type="button" class="btn btn-outline-danger myAlignLeft butDel" id="fuelButDel" onclick="calcButDel('fuel')" >Видалити</button>

<button type="button" class="btn btn-outline-secondary _centered" data-bs-toggle="modal" data-bs-target="#modCalc">
Назад</button>
    &nbsp;
        <button type="button" class="btn btn-primary" id="buttonPaid" onclick=""></button>
    </div>
        </form>
            </div>
                </div>
</div>