  
<!DOCTYPE html>
<html>
<head>
  <title>Bienvenidos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="citas.css">
</head>
<body>

  
    <ul>
      <li>
              <a href="#" target="_blank"><i class="fa fa-bars"></i></a>
        <ul class="dropdown">
          <li><a href="servicio.php">Servicio</a></li>
          <li><a href="Horario.php">Horarios</a></li>
          <li><a href="PreguntasF.php">Preguntas Frecuentes</a></li>
            <li><a href="desplegar.php">Citas</a></li>
           <li><a href="paquete.php">Paquetes</a></li>

        </ul>
      </li>
      <li><a href="Inicio.php">Inicio</a></li>
      <li><a href="Contacto.php">Contacto</a></li>
      <li><a href="Filo.php">Sobre Nosotros</a></li>

    </ul>
    <a href="#" class="logo i">
        <img src="https://i.postimg.cc/br4YFVJ7/Proyecto.png" alt="Logo de la compañía">
    </a>


    <?php  include 'footer.php';  ?>



  <form action="Regis.php" method="post">

    <h1><i class="fa fa-calendar-check-o"></i> Citas Disponibles </h1><br>


 <!-- Enunciado para guiar al usuario con la info-->

    <?php
   date_default_timezone_set('America/Costa_Rica'); // Establece la zona horaria deseada
    $fecha_actual = date('Y-m-d'); 
    ?>
 <input type="date" id="fecha" name="fecha" min="<?php echo date('Y-m-d'); ?>" required>    <!-- Establece la fecha minima seleccionable sea la actual-->
        <span class="error-message" id="resultado"></span>  <!-- muestra el mensaje de error-->
    <select id="hora" name="hora" onclick="verificarDisponibilidad()">   <!-- Menu desplegable con la hora para la seleccion del usuario-->
              <option value="07:00">7:00 AM</option>
        <option value="09:00">9:00 AM</option>
        <option value="11:00">11:00 AM</option>
        <option value="13:00">1:00 PM</option>
        <option value="15:00">3:00 PM</option>
        <option value="17:00">5:00 PM</option>
    </select>
        <br>

         <!-- Boton que confirma y ejecuta el redireccionamiento a otra pagina-->

         <button type="submit" name="Confirmar">Confirmar</button>


  </form>

 <!-- Esta seleccion contiene un script para verificar la fecha y hora del formulario-->

<script>
function verificarDisponibilidad() {

    var fecha = document.getElementById("fecha").value;
    var hora = document.getElementById("hora").value;
    var fechaInput = new Date(fecha);
    var currentDate = new Date();

    var xhr = new XMLHttpRequest();// realiza una solicitud a la base
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                document.getElementById("resultado").innerHTML = xhr.responseText;  //xhr es parte de la API web de un servidor en JavaScript
            } else {
                document.getElementById("resultado").innerHTML = "Error al verificar la disponibilidad.";
            }
        }
    };
    xhr.open("POST", "Disponibilidad.php", true); //redirige la sesion a otra pagina
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //Request del servidor o su encabezado
    xhr.send("fecha=" + encodeURIComponent(fecha) + "&hora=" + encodeURIComponent(hora));  //Se envia lo que se va a solicitar
}
</script>


</body>
</html>








