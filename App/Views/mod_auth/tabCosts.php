{% if not data.0 %}
<div class="col border rounded text-muted text-center p-5 fs-6">
    &#10004; Щоб додати витрати, натисніть<br>на кнопку з олівцем зверху.
<!-- &#10004; Щоб додати пробіг, натисніть на кнопку з олівцем<span id='pen_small_new'>&#9998;</span> зверху. -->
</div>
{% endif %}



{% if data.0 %}
    <div class="mb-3">Разом: {{ data.sum_price }} грн.</div>
{% endif %}



{% for table in data %}
{% if table.date_c %}
<div class="col border rounded mb-3 p-2 bg-light costsBlock">
    <div class="col fst-italic text-muted">{{ table.date_c_ukr }}</div>
        <div class="row text-center fs-6 p-1">
          <div class="col-7 costs">{{ table.key_costs }}</div>
            <div class="col-5 price">{{ table.price }} грн</div>
        </div>
            <div hidden>{{ table.id }}</div>
            <div class="_dateCosts" hidden>{{ table.date_c }}</div>   
        {% if not table.comment %}<div class="col pb-2">{% endif %}
        {% if table.comment %}<div class="col fst-italic text-muted commentCosts"><i class="bi bi-pen me-1"></i>{{ table.comment }}{% endif %}</div>
</div>
{% endif %}
{% endfor %}



{% if data.0 %}
<div class="form-text note">
    &#10004; Щоб додати витрати, натисніть на кнопку з олівцем <span id='pen_small' class='rounded'>&#9998;</span> зверху. Для редагування - натисніть на відповідний запис витрат. 
        </div>
{% endif %}