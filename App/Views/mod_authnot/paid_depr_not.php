<div class="modal fade" tabindex="-1" id="modPaidDepr_not">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">  
            <h5 class="modal-title">Додати виплати за амортизацію</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
<div class="modal-body">
    <form action="../ai/" method="POST" id="delPaid2">
        <input type="hidden" name="key_mod_mileage_add" value="8">
            <input type="hidden" name="monthPaidDel" id="inputPaidDel2">
              </form>
<div id="alertPaid2"></div>
    <form action="../ai/" method="POST" id="formPaid2">
        <input type="hidden" name="key_mod_mileage_add" value="7">
            <input type="hidden" class="inputPaid" name="year_paid">
                <input type="hidden" class="inputPaid" name="month_paid">
<div class="form-floating mb-3">
  <input class="form-control inputPaid" value="Грудень" disabled>
  <label for="floatingInput">Місяць:</label>
</div>
<div class="form-floating mb-3">
  <input type="tel" class="form-control inputPaid" name="paid_depr">
  <label for="floatingPassword">Сума, грн</label>
    </div>
        </div>
<div class="modal-footer">
    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modCalc_not">Назад</button>
    &nbsp;
        <button type="button" class="btn btn-primary" id="buttonPaid2" form="formPaid2" data-bs-toggle="modal" data-bs-target="#modLogin" onclick="pressReg()">Зберегти</button>
            </div>
            </form>
        </div>
    </div>
</div>