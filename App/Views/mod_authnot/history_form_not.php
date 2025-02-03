<div class="modal fade" tabindex="-1" id="modHistory_not">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

<form id="monthForm_not" class="row g-0">

<div class="form-floating col-auto">
  <select class="form-select monthSelect_not" aria-label="Floating label select example" name="month">
    <option value="1">Січень</option>
    <option value="2">Лютий</option>
    <option value="3">Березень</option>
    <option value="4">Квітень</option>
    <option value="5">Травень</option>
    <option value="6">Червень</option>
    <option value="7">Липень</option>
    <option value="8">Серпень</option>
    <option value="9">Вересень</option>
    <option value="10">Жовтень</option>
    <option value="11">Листопад</option>
    <option value="12" selected>Грудень</option>
  </select>
  <label for="monthSelect">Місяць:</label>
</div>

&nbsp &nbsp

<div class="form-floating col-auto">
<select class="form-select floatingSelect_not" aria-label="Default select example" name="year">
  <option value="2022" selected>2022</option>
  <option value="2023">2023</option>
  <option value="2024">2024</option>
  <option value="2025">2025</option>
  <option value="2026">2026</option>
</select>
<label for="floatingSelect">Рік:</label>
</div>

</form>


<button type="button" class="rounded butAddHistoryClass"
        data-bs-toggle="modal" data-bs-target="#mod_miles_add_not"
        onclick="addDateNow()">&#9998;</button>



<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="modalBody_not">


<div class="mess_reg">Сторінка для ознайомлення! Будь ласка, зареєструйтесь!</div>


<table class='table table-bordered myTab'>
<tr class='table-secondary'><td>Число</td><td>Мій пробіг</td><td>Врахований</td><td>Різниця</td>

</tr>

<form action='https://dov.pp.ua' method='POST'>
        <input type='hidden' name='key_open_edit' value='1'>
            <tr class='tabRow'>  
                <td>1</td>
                <td>135</td>
                <td>135</td>
                <td>0</td>
            </tr>
                        <tr class='tabRow'>  
                <td>2</td>
                <td>46</td>
                <td>45</td>
                <td>1</td>
            </tr>
                        <tr class='tabRow'>  
                <td>3</td>
                <td>143</td>
                <td>140</td>
                <td>3</td>
            </tr>
                        <tr class='tabRow'>  
                <td>4</td>
                <td>75</td>
                <td>75</td>
                <td>0</td>
            </tr>
                        <tr class='tabRow'>  
                <td>5</td>
                <td>127</td>
                <td>120</td>
                <td>7</td>
            </tr>
      </form>


<tr class='table-secondary'>
        <td>Разом</td>
        <td>526</td>
        <td>515</td>
        <td>11</td>

    </tr>

</table>

<div class='form-text note'>&#10004; Щоб додати пробіг, натисніть на кнопку з олівцем 
    <span id="pen_small" _class="rounded">&#9998;</span> зверху. Для редагування пробігу, натисніть на ньому в таблиці.
</div>

</div>
            </div>

        </div>
    </div>
</div>