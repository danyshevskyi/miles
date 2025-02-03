{% extends "base.php" %}


{% block header %}
<div class="header d-flex justify-content-between">


<div id="menu" class="text-center">
    <button
        class="btn btn-outline-light"
        id="menu_button"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasExample"
        aria-controls="offcanvasExample">
        Меню
    </button>
</div>


<div class="logo">
    <a href="https://miles.dov.pp.ua">
        <img src="/App/Views/img/ukraine.png">
            <span id="logo_url">miles.dov.pp.ua</span>
                <h5>Пробіг Авто</h5>
                    </a>
</div>


<!-- Menu contant -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel"> 
    <div class="row mx-3 my-4">
        <div class="col-2 ps-0 px-0">
            <button type="button" class="btn border border-secondary ms-1 px-4 py-1" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="bi bi-arrow-left fs-3"></i>
                    </button>
                        </div>
        
        <div class="col-10">
            <h5 class="offcanvas-title py-2 text-center fst-italic" id="offcanvasExampleLabel">{{ email }}</h5>
                </div>
    </div>
  
  <div class="offcanvas-body">


<div class="menu_button">
    <button type="button"
            class="btn btn-outline-secondary but-size"
            onclick="showMileages('currentMonth')">
            <i class="bi bi-speedometer2 fs-3 pe-2"></i>Мої пробіги
    </button>
</div>

    <br>

    <div class="my_button2">
        <button type="button"
                class="btn btn-outline-secondary but-size"
                onclick="modCosts('show')">
                <i class="bi bi-cash-coin fs-3 pe-2"></i>Витрати авто
        </button>
    </div>

    <br>

    <div class="my_button2">
        <button type="button"
                class="btn btn-outline-secondary but-size"
                onclick="showCalc('currentMonth')">
                <i class="bi bi-file-spreadsheet pe-2"></i>Розрахунки
        </button>
    </div>

    <br><br>

    <div class="my_button2 text-center">
        <button type="button"
                class="btn btn-link but-size text-decoration-none"
                data-bs-toggle="modal"
                data-bs-target="#mod_shortcut_chrome">

                <i class="bi bi-check2-circle pe-2 fs-3"></i>
                Додати на робочий стіл
        </button>
    </div>

    <br><br>

    <div class="my_button2">
        <form action="../miles" method="POST">
            <input type="hidden" name="key" value="end">
                <button type="submit" id="but_exit_alert" hidden></button>
                    <button type="button" class="btn btn-secondary but-size" onclick="butEnd('miles')">Вихід</button>
                        </form>
    </div>
        
        </div>
</div>


</div>
{% endblock %}




{% block content %}
<div id="block_buttons">
    <div class="my_button">
        <button type="button"
                class="btn btn-light but-size"
                _data-bs-toggle="modal"
                _data-bs-target="#modAddMileages"
                onclick="butAddMileages()">
                    <i class="bi bi-speedometer2 fs-3"></i>&nbsp;&nbsp;Додати пробіг
        </button>
    </div>
    <div class="my_button">
        <button type="button"
                class="btn btn-light but-size"
                _data-bs-toggle="modal"
                _data-bs-target="#modCostsAdd"
                onclick="butAddCosts()">
                    <i class="bi bi-cash-coin fs-3"></i>&nbsp;&nbsp;Додати витрати
        </button>
    </div>
</div>
{% endblock %}



{% block footer %}

     <button class="btn btn-outline-light"
            id="review_but" 
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#mod_review">
        Відгук
    </button>
  

     <button id="footer_button"
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#modAbout">
         Про web-додаток
    </button>

{% endblock %}

{% block modals %}

    {{ include('mod_auth/modMileages.php') }}
    {{ include('mod_auth/modCalc.php') }}
    {{ include('mod_auth/modAddMileages.php') }}
    {{ include('mod_auth/modUpdMileages.php') }}
    {{ include('mod_auth/modCalcDeprAdd.php') }}
    {{ include('mod_auth/modCalcFuelAdd.php') }}
    {{ include('mod_auth/modCosts.php') }}
    {{ include('mod_auth/modCostsAdd.php') }}
    {{ include('mod_auth/modCostsUpd.php') }}
    {{ include('mod_auth/mod_shortcut_chrome.php') }}
    {{ include('mod_auth/mod_shortcut_mozilla.php') }}

{% endblock %}

{% block js %}
<script type="text/javascript">
    {{ include('js/js_auth.js') }}
    {{ include('js/costs.js') }}
    {{ include('js/mod_entry.js') }}
    {{ include('js/review.js') }}
</script>
{% endblock %}