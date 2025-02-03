<div class="modal fade" tabindex="-1" id="modLogin">
  <div class="modal-dialog">
    <div class="modal-content">

<!-- tubs -->
<div class="nav nav-tabs my_tab" id="nav-tab" role="tablist">

<button class="nav-link but_tab_reg" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Вхід</button>
    
<button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Реєстрація</button>

<button type="button" class="btn-close but_tab_close" data-bs-dismiss="modal" aria-label="Close"></button>
    
</div>
<!-- /tubs -->


<div class="tab-content" id="nav-tabContent">

<!-- entry form -->
<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      
<div class="modal-body">

<div class="alertModEntry" id="alertLoginWrong" hidden>Вибачте, логін або пароль невірний</div>





<form action="../miles/" method="POST" id="formAuth">
    <input name="key" value="checkUserAuth" id="checkOrAuth" hidden>
        <button type="submit" id="butAuthUser" hidden></button>


<div class="form-floating mb-3">
    <input
        name="email"
        type="text"
        class="form-control form-control-lg"
        id="inputAuthLog"
        placeholder="name@example.com"
        maxlength="50"
        required>
            <label for="floatingInput"><span class="text-secondary">Email</label>
</div>


<div class="col form-floating position-relative">
  <input
    name="pass"
    type="password"
    class="form-control form-control-lg inputPassAuth"
    id="_inputAuthPass"
    placeholder="Password"
    maxlength="50"
    required>
        <label for="inputAuthPass"><span class="text-secondary">Пароль</span></label>
            <div class="col-2 position-absolute top-0 end-0" onclick="passShow('inputPassAuth')">
                <i class="bi bi-eye fs-4 text-secondary text-center py-3" id="inputPassAuth"></i>
                    </div>
</div>





<div class="form-check">
    <input class="form-check-input" type="checkbox" id="gridCheck1" name="rem" value="1">
        <label class="form-check-label" for="gridCheck1">Запам'ятати мене</label>
            </div>

</div>

<div class="modal-footer">


            <button type="button" class="btn btn-primary but_width_ent" onclick="butAuth('miles')">Увійти</button>
                </div>
</form>

</div>
<!-- /entry form -->    


<!-- reg form -->
<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">


<form action="../miles/" method="POST" id="formReg">    
    
    <input name="key" value="checkUserReg" id="checkOrReg" hidden>
    <button type="submit" id="butRegUser" hidden></button>


<div class="modal-body">

    <div class="alertModEntry" id="alertUserExist"></div>




<div class="form-floating mb-3">
    <input
        name="email"
        type="text"
        class="form-control form-control-lg"
        id="inputRegLog"
        placeholder="name@example.com"
        maxlength="50"
        required>
            <label for="inputRegLog"><span class="text-secondary">Email</label>
</div>


<div class="alertModEntry" id="wrongPass"></div>

<div class="col form-floating position-relative mt-4">
  <input
    name="pass"
    type="password"
    class="form-control form-control-lg inputPassReg"
    id="_inputRegPass"
    placeholder="Password"
    maxlength="50"
    required>
        <label for="inputPassReg"><span class="text-secondary">Пароль</span></label>
            <div class="col-2 position-absolute top-0 end-0" onclick="passShow('inputPassReg')">
                <i class="bi bi-eye fs-4 text-secondary text-center py-3" id="inputPassReg"></i>
                    </div>
</div>



<div class="col form-floating position-relative mt-3">
  <input    
    name="pass"
    type="password"
    class="form-control form-control-lg inputPassReg"
    id="_inputRegPass2"
    placeholder="Password"
    maxlength="50"
    required>
        <label for="inputPassReg"><span class="text-secondary">Повторити пароль</span></label>
</div>












<div class='form-text note_entry'>&#10004; Пароль може бути будь-який з латинських літер та цифр</div>

<div class="form-check">
    <input class="form-check-input" type="checkbox" id="gridCheck1" name="rem" value="1">
        <label class="form-check-label" for="gridCheck1">Запам'ятати мене</label>
            </div>
</div>

<div class="modal-footer">
<!--     <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Закрити</button>
        &nbsp; -->
            <button type="button" class="btn btn-primary but_width_ent" onclick="butReg('miles')">Готово</button>
                </div>
</form>
    </div>
<!-- /reg form -->


            </div>
        </div>
    </div>
</div>