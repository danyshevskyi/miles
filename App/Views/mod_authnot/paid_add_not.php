<div class="modal fade" tabindex="-1" id="modPaidAdd_not">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">  
            <h5 class="modal-title">Додати виплати за паливо</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
<div class="modal-body">
    <form action="../ai/" method="POST" id="delPaid">
        <input type="hidden" name="key_mod_mileage_add" value="5">
            <input type="hidden" name="monthPaidDel" id="inputPaidDel">
              </form>
<div id="alertPaid"></div>
    <form action="../ai/" method="POST" id="formPaid">
        <input type="hidden" name="key_mod_mileage_add" value="4">
            <input type="hidden" class="inputPaid" name="year_paid">
                <input type="hidden" class="inputPaid" name="month_paid">
<div class="form-floating mb-3">
  <input class="form-control inputPaid" value="Грудень" disabled>
  <label for="floatingInput">Місяць:</label>
</div>
<div class="form-floating mb-3">
  <input type="tel" class="form-control inputPaid" name="paid" value="2549">
  <label for="floatingPassword">Сума, грн</label>
</div>
        </div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-outline-secondary myAlignLeft" form="delPaid" id="myButDelPaid" hidden></button>
        <button type="button" class="btn btn-outline-danger myAlignLeft butDel" data-bs-toggle="modal" data-bs-target="#modLogin" onclick="pressReg()">Видалити</button>

<script type="text/javascript">

</script>

    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modCalc_not">
        Назад
        </button>
            <button type="button" class="btn btn-primary" id="buttonPaid" form="formPaid" data-bs-toggle="modal" data-bs-target="#modLogin" onclick="pressReg()">Оновити</button>
    </div>
        </form>
            </div>
                </div>
</div>