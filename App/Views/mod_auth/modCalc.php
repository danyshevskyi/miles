<div class="modal fade" tabindex="-1" id="modCalc">
    <div class="modal-dialog">
        <div class="modal-content">
            
<div class="row mt-3 pb-3 mx-2">

    <form id="monthForm2" class="row g-0">
        <input type="hidden" name="key" value="calc">

    <div class="col-auto ms-2">
        <div class="form-floating col-auto">
              <select class="form-select" id="monthCalc" aria-label="Floating label select example" name="month">
                <option value="01">Січень</option>
                <option value="02">Лютий</option>
                <option value="03">Березень</option>
                <option value="04">Квітень</option>
                <option value="05">Травень</option>
                <option value="06">Червень</option>
                <option value="07">Липень</option>
                <option value="08">Серпень</option>
                <option value="09">Вересень</option>
                <option value="10">Жовтень</option>
                <option value="11">Листопад</option>
                <option value="12">Грудень</option>
              </select>
                    <label for="monthCalc">Місяць:</label>
        </div>
    </div>

    <div class="col-auto mx-2">
        <div class="form-floating col-auto">
            <select class="form-select" id="yearCalc" aria-label="Default select example" name="year">
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024" selected>2024</option>
              <option value="2025">2025</option>
              <option value="2026">2026</option>
            </select>
            <label for="yearCalc">Рік:</label>
        </div>
    </div>

   <div class="col-auto p-2 ms-auto me-2">
        <button type="button"
                class="btn-close" 
                data-bs-dismiss="modal" 
                aria-label="Close">
        </button>
    </div>
    
    </form>
</div>

<hr>

<div class="container modal-body">

    <div class="col mb-3">
        <h5 class="text-center"><i class="bi bi-file-spreadsheet fs-3 pe-2"></i>Розрахунки</h5>
            </div>

            <div class="col-auto" id="modalBody2">
               <!-- api content --> 
                    </div>
</div>

            
        </div>
    </div>
</div>