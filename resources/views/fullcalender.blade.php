<!doctype html>
<h1>
 
 <div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Inicio</h1>
        <html lang="es">
    </h1>
    <tr>

    <head>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

    </head>

    <body>

        <div class="container">

            <div class="panel panel-primary">

                <div class="panel-heading">





                    Calendario de Actividades   

                </div>

                <div class="panel-body" >

                    {!! $calendar->calendar() !!}

                    {!! $calendar->script() !!}

                </div>

            </div>

        </div>

    </body>

    </html>