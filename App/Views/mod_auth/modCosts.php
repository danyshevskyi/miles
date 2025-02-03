<div class="modal fade" tabindex="-1" id="modCosts">
    <div class="modal-dialog">
        <div class="modal-content">
            


<div class="row mt-3 pb-3 mx-2">

    <form id="monthForm_c" class="row g-0">
         <input type="hidden" name="key" value="costs">

    <div class="col-auto ms-2">
        <div class="form-floating col-auto">         
          <select class="form-select" id="monthCosts" aria-label="Floating label select example" name="month">
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
                <label for="monthCosts">Місяць:</label>       
        </div>
    </div>


    <div class="col-auto mx-2">
        <div class="form-floating">
          <select class="form-select" id="yearCosts" name="year">
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024" selected>2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
          </select>
          <label for="yearCosts">Рік:</label>
        </div>
    </div>

    <div class="col-auto">
         <button 
                type="button"
                class="rounded butAdd"
                onclick="butAddCosts()"
                >&#9998;
        </button>   
    </div>

    <div class="col-auto p-2 ms-auto me-2"> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

</div>


<hr>



<div class="modal-body">

    <div class="col">
        <h5 class="text-center"><i class="bi bi-cash-coin fs-3 pe-2"></i>Витрати авто</h5>
            </div>



    <div class="position-relative mb-3 mt-3 pt-1 pb-1">

        <div class="col-7 position-absolute top-0 end-0">
            <select id="selFilterCosts" class="form-select form-select-sm" aria-label=".form-select-sm example" name="filter">
                  <option value="all">Всі витрати авто</option>
                  <option value="fuel">Заправка</option>
                  <option value="service">Тех. обслуговування</option>
                  <option value="other">Інші витрати авто</option>
                  <option value="person">Особисті витрати</option>
            </select>
        </div>
     
        <div id="modalBody_c">
            <!-- get api -->
        </div>

    </div>



</div>

</form>

      
        </div>
    </div>
</div>