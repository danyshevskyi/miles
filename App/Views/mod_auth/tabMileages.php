<table class='table table-bordered'>

{% if data.0 %}
<tr class='table-secondary'>
    <td>Число</td>
    <td>Мій пробіг</td>
    <td>Врахований</td>
    <td>Різниця</td>
    <td hidden>Коментар</td>
</tr>
{% endif %}



{% for table in data %}

{% if table.date_m %}

<tr class='{{ table.row_color }} tabRow'>
    <td>{{ table.date_m }}</td>
    <td>{{ table.my_m }}</td>
    <td>{{ table.counted_m }}</td>
    <td>{{ table.diff }}</td>
    <td class='rowComment' hidden>{% if not table.comment %}-{% endif %}{{ table.comment }}</td>
</tr>

{% endif %}

{% endfor %}



{% if not data.0 %}
<tr><td colspan='4'>
<div class='form-text noteNew'>&#10004; Щоб додати пробіг, натисніть на кнопку з олівцем 
<span id='pen_small_new' _class='rounded'>&#9998;</span> зверху.
</div>
</td></tr>
{% endif %}



{% if data.0 %}
<tr class='table-secondary'>
        <td>Разом</td>
        <td>{{data.sum_my_m}}</td>  
        <td>{{data.sum_counted_m}}</td>
        <td>{{data.sum_diff}}</td>
        <td hidden>-</td>
    </tr>
{% endif %}
</table>



{% if data.0 %}
<div id='_addMileageComment' class='form-text note'>&#10004; Щоб додати пробіг, натисніть на кнопку з олівцем 
    <span id='pen_small' class='rounded'>&#9998;</span> зверху. Для редагування пробігу, натисніть на ньому в таблиці.
</div>
{% endif %}