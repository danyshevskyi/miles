<!DOCTYPE html>
<html>
<head>

<!-- Google tag (gtag.js) -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-95VC2QPHZF"></script> -->
<!-- <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-95VC2QPHZF');
</script> -->

    <meta charset="utf-8">
    <meta name="description" content="Облік пробігу та витрат на авто. Повністю безкоштовний додаток.">
    <meta name="keywords" content="Облік, Пробіг, Витрати, Авто, Кілометраж">
    <meta name="author" content="Danyshevskyi Oleksii">
    <meta name="viewport" content="width=device-width, initial-scale=1">    

    <title>Пробіг Авто</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
    <link rel="stylesheet" type="text/css" href="/miles/app/views/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="/miles/app/views/img/favicon.ico"/>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <style type="text/css">

        .t18 {
            font-size: 18px;
        }

        .bb {
            border: 1px solid blue;
        }

        /* css for mod_entry */

        #nav-home-tab {
            width: 110px;
        }


    </style>

</head>


<body>

<div class="container">
    <div class="wrapper">
        
        <div class="top">
            {% block header %}{% endblock %}
                <div id="content">{% block content %}{% endblock %}</div>
                    </div>
        
        <div id="footer">{% block footer %}{% endblock %}</div>
    
    </div>
</div>

{{ include('mod_authnot/modReview.php') }}
{{ include('mod_authnot/modReviewMesOk.php') }}
{{ include('mod_authnot/modAbout.php') }}
{% block modals %}{% endblock %}

<script type="text/javascript">
{{ include('js/core.js') }}
</script>

{% block js %}{% endblock %}


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>