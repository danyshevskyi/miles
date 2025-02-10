<div class="modal fade" tabindex="-1" id="modMileages">
    <div class="modal-dialog">
        <div class="modal-content">



<div class="row mt-3 pb-3 mx-2">

<form id="monthForm" class="row g-0">
     <input type="hidden" name="key" value="mileages">

    <div class="col-auto ms-2">
        <div class="form-floating"> 
          <select class="form-select" id="monthSelect" aria-label="Floating label select example" name="month">
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
        <label for="monthSelect">Місяць:</label>
    </div>
</div>



<div class="col-auto mx-2">
    <div class="form-floating">
            <select class="form-select" id="yearSelect" aria-label="Default select example" name="year">
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
              <option value="2025" selected>2025</option>
              <option value="2026">2026</option>
            </select>
        <label for="yearSelect">Рік:</label>
    </div>
</div>

    <div class="col-auto">
        <button 
            type="button"
            class="rounded butAdd"
            onclick="butAddMileages()">
            &#9998;
        </button>
    </div>

    <div class="col-auto p-2 ms-auto me-2"> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

</div>

<hr>


      <div class="modal-body">

    <div class="col">
        <h5 class="text-center _pb-2"><i class="bi bi-speedometer2 fs-3"></i>&nbsp;&nbsp;Мої пробіги</h5>
            </div>

        <div class="mt-3" id="modalBody">
            
          <!-- tabMileages -->  

        </div>

      </div>
</form>        
        </div>
    </div>
</div>