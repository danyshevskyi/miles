{% if data.mileage_month  %}
<div class="col border rounded fw-semibold bg-light">
    <div class="row text-center py-3">
        <div class="col-8"><i class="bi bi-speedometer2 pe-2"></i>Врахований пробіг, км</div>
            <div class="col-4">{{data.mileage_month}}</div>
                </div>   
</div>
{% endif %}


<div class="col border rounded mt-3 py-3 bg-light">


    <div class="col" id='paidId'>
        
        {% if data.paid  %} 
            <div class="row text-center">
                <div class="col-8">Виплачено за паливо, грн</div>
                    <div class="col-4" id='paidIdvalue'>{{data.paid}}</div>
                        </div>

                {% if data.mileage_month %}
                <div class="row fst-italic text-muted">
                    <div class="col-8 text-center">За кілометр, грн</div>
                        <div class="col-4 text-center">{{(data.paid / data.mileage_month)|round(2, 'floor')}}</div>
                            </div>
                {% endif %}

        {% endif %}


        {% if not data.paid  %} 
            <div class="col fst-italic text-center text-muted py-2">
                    <div id='paidIdvalue'></div>
                        <i class="bi bi-pen me-1"></i>Додати виплати за паливо
            </div>
        {% endif %}
    </div>


    <div class="col my-3 px-2"><hr></div>


    <div class="col" id='deprID'>
        {% if data.depr  %}
            <div class="row text-center">
                <div class="col-8">Виплачено амортизації, грн</div>
                    <div class="col-4" id='paidIdvalue2'>{{data.depr}}</div>
                        </div>

                {% if data.mileage_month %}
                <div class="row fst-italic text-muted">
                    <div class="col-8 text-center">За кілометр, грн</div>
                        <div class="col-4 text-center">{{(data.depr / data.mileage_month)|round(2, 'floor')}}</div>
                            </div>
                {% endif %}

        {% endif %}

        {% if not data.depr %} 
            <div class="col fst-italic text-center text-muted py-2">
                <div id='paidIdvalue2'></div>
                    <i class="bi bi-pen me-1"></i>Додати виплати амортизації
            </div>
        {% endif %}
    </div>


    {% if data.paid or data.depr %}
    <div class="col my-3 px-2"><hr></div>

        <div class="row text-center fw-semibold">
            <div class="col-8"><i class="bi bi-cash-coin pe-2"></i>Загальні виплати, грн</div>
                <div class="col-4">{{data.paid + data.depr}}</div>
                    </div>
    {% endif %}
</div>





{% if data.costs %}
<div class="col border rounded fw-semibold bg-light mt-3">
    <div class="row text-center py-3">
        <div class="col-8"><i class="bi bi-fuel-pump pe-2"></i>Витрати на авто, грн</div>
            <div class="col-4">{{data.costs}}</div>
                </div>   
</div>
{% endif %}


{% if not data.costs %}
<!--             <div class="col border rounded bg-light mt-3 fst-italic text-center text-muted py-3">
                <div id='paidIdvalue2'></div>
                    <i class="bi bi-fuel-pump pe-2"></i>Витрати на авто відсутні ...
            </div> -->




<!--             <div class="col fst-italic text-center text-muted py-2">
                <div id='paidIdvalue2'></div>
                    <i class="bi bi-pen me-1"></i>Додати витрати
            </div> -->
{% endif %}








{% if data.paid or data.depr or data.costs %}
<div class="col border rounded fw-semibold bg-light mt-3">
    <div class="row text-center py-3">
        <div class="col-8">Залишок амортизації, грн</div>
            <div class="col-4">{{data.paid + data.depr - data.costs}}</div>
                </div>   
</div>
{% endif %}





<div id='addMileageComment' class='form-text note'>
    &#10004; Щоб додати або редагувати виплати за паливо та амортизацію, натисніть на відповідні поля
        </div>