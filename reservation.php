<!DOCTYPE html>
<html>
 <!--   <head>
        <title>Formulario de Reservación de Espacio para Evento</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comic Neue|Montserrat|Do Hyeon|Inter|Mitr">
    </head>
    
    <body> -->

        <h1>Información del Evento</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $event_name = $_POST["event_name"];
            $persons_no = $_POST["persons_no"];
            $date_event = $_POST["date_event"];
            $hour = $_POST["hour"];
            $comentario = $_POST["comentario"];
            echo "<p>Nombre del evento: $event_name</p>";
            echo "<p>Número de personas: $persons_no</p>";
            echo "<p>Fecha del Evento: $date_event</p>";
            echo "<p>Hora del Evento: $hour</p>";
            echo "<p>Comentario: $comentario</p>";
        }
        ?>

    </body>
</html>
