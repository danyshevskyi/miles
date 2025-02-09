{% extends "base.php" %}


{% block header %}
<!-- <div class="header"> -->
<div class="d-flex justify-content-center align-items-center py-4 1my-1" id="_height_300" _style="height: 150px;">
   <div id="logo_notauth">
        <a href="https://dov.pp.ua/miles" class="text-decoration-none text-light">
            <img src="/miles/app/views/img/ukraine.png">
                <span id="logo_url_notauth">dov.pp.ua/miles</span>
                    <h3>Пробіг Авто</h3>
                        </a>
                            </div>
</div>
<!-- </div> -->
{% endblock %}


{% block content %}


<!-- <div class="col text-center text-light fs-4 py-5 fst-italic"></div> -->

    <div class="d-flex justify-content-center">
<!--         <button type="button"
                class="btn btn-light but-size"
                data-bs-toggle="modal"
                data-bs-target="#modLogin"
                onclick="pressEntry()">В х і д
        </button> -->
                <button
                        id="butSignIn"
                        type="button"
                        class="btn btn-light but-size"
                        data-bs-toggle = "modal"
                        data-bs-target = "#mod_entry"
                        onclick = "pressLogin()">В х і д
        </button>
            
    </div>
   
    <div id="but_notauth">
        <button type="button"
                class="text-dark"
                data-bs-toggle="modal"
                data-bs-target="#mod_entry"
                onclick="pressReg()"
                id="footer_button">
        Ви тут вперше? <span class="text-decoration-underline fs-3">Зареєструйтесь!</span>
        </button>
    </div>


<div id="carouselExampleControls" class="carousel slide mt-4" data-bs-ride="carousel">
  <div class="carousel-inner mx-auto bb1" style="width: 332px;">

    <div class="carousel-item active" data-bs-interval="3000">
      <img src="/miles/app/views/img/app_pages/app_01.png" class="d-block 1w-50" alt="...">
    </div>
    
    <div class="carousel-item" data-bs-interval="3000">
      <img src="/miles/app/views/img/app_pages/app_02.png" class="d-block 1w-100" alt="...">
    </div>
    
    <div class="carousel-item" data-bs-interval="3000">
      <img src="/miles/app/views/img/app_pages/app_03.png" class="d-block 1w-100" alt="...">
    </div>
  
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>


{% endblock %}


{% block footer %}
     <button id="footer_button"
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#modAbout">
         Про web-додаток
    </button>
{% endblock %}


{% block modals %}

    {{ include('mod_authnot/history_form_not.php') }}
    {{ include('mod_authnot/calc_not.php') }}
    {{ include('mod_authnot/mileage_add_not.php') }}
    {{ include('mod_authnot/mileage_update_not.php') }}
    {{ include('mod_authnot/paid_add_not.php') }}
    {{ include('mod_authnot/paid_depr_not.php') }}
    {{ include('mod_auth/mod_shortcut_chrome.php') }}
    {{ include('mod_auth/mod_shortcut_mozilla.php') }}
    {{ include('mod_authnot/mod_entry.php') }}

    <script type="text/javascript">
    {{ include('js/js_authnot.js') }}
    {{ include('js/mod_entry.js') }}
    </script>

{% endblock %}