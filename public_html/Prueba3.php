<!DOCTYPE html>
<html>
<head>
  <title>Bienvenidos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Agendar.css">
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

    <?php include 'footer.php'; ?>

  <form action="Confirmar.php" method="post">
    <h1><i class="fa fa-calendar-check-o"></i> Agendar Cita </h1><br>

    <!-- Enunciado para guiar al usuario con la info-->

    <?php
   date_default_timezone_set('America/Costa_Rica'); // Establece la zona horaria deseada
    $fecha_actual = date('Y-m-d');
    ?>
    <!-- Un campo de entrada de fecha que permite a los usuarios seleccionar una fecha -->
    <input type="date" id="fecha" name="fecha" min="<?php echo $fecha_actual; ?>" required>
<!-- Un elemento para mostrar mensajes de error o resultados -->
    <span class="error-message" id="resultado"></span>
        <!-- Un menú desplegable para seleccionar la hora -->
    <select id="hora" name="hora" onclick="verificarDisponibilidad()">
      <option value="07:00">7:00 AM</option>
      <option value="09:00">9:00 AM</option>
      <option value="11:00">11:00 AM</option>
      <option value="13:00">1:00 PM</option>
      <option value="15:00">3:00 PM</option>
      <option value="17:00">5:00 PM</option>
    </select>
    <br>

    <!-- Un campo de entrada de correo electrónico que se utilizará para la verificación -->

    <input type="email" id="correo" name="correo" placeholder="Correo de verificacion" required><br><br>


    <?php
    session_start();
    // Inicia la sesión. Esto debe hacerse antes de cualquier salida o manipulación de sesiones.

    if (isset($_SESSION['user_id'])) {
            // Comprueba si la variable de sesión 'user_id' está definida, lo que indica que el usuario está autenticado.

        if (isset($_SESSION['correo_verificado'])) {
                    // Comprueba si la variable de sesión 'correo_verificado' está definida.

             $correo_verificado = $_SESSION['correo_verificado'];
                     // Asigna el valor de la variable de sesión 'correo_verificado' a la variable local $correo_verificado.
        }
    } else {
            // Si 'user_id' no está definido en la sesión (el usuario no está autenticado):

        header("Location: login.php");
            // Redirige al usuario a la página de inicio de sesión (login.php).

        exit();
            // Finaliza la ejecución del script actual para evitar que el código siga ejecutándose después de la redirección.

    }

    ?>

    <!-- Boton que confirma y ejecuta el redireccionamiento a otra pagina-->

    <button type="submit" name="Confirmar">Confirmar</button>

  </form>


<script>
function verificarDisponibilidad() {
     // Esta función se ejecuta cuando se activa el evento onclick en el menú desplegable de horas
    var fecha = document.getElementById("fecha").value;
    var hora = document.getElementById("hora").value;
     // Obtiene los valores seleccionados de la fecha y la hora del formulario

    var fechaInput = new Date(fecha);
    var currentDate = new Date();
// Crea objetos Date para las fechas seleccionada y actual
    var xhr = new XMLHttpRequest();
    // Crea un objeto XMLHttpRequest para realizar la solicitud asincrónica

    xhr.onreadystatechange = function() {
                // Esta función de devolución de llamada se ejecuta cuando cambia el estado de la solicitud

        if (xhr.readyState === XMLHttpRequest.DONE) {
                        // Si la solicitud se ha completado

            if (xhr.status === 200) {
                // Si el estado de respuesta es 200 (OK)
                document.getElementById("resultado").innerHTML = xhr.responseText;
                // Establece el contenido del elemento con id "resultado" con la respuesta del servidor
            } else {
                document.getElementById("resultado").innerHTML = "Error al verificar la disponibilidad.";
                // Si hay un error en la respuesta, muestra un mensaje de error en el elemento "resultado"
            }
        }
    };
    xhr.open("POST", "Disponibilidad.php", true);
    // Abre una conexión POST al archivo "Disponibilidad.php" de manera asincrónica
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    // Configura el tipo de contenido en la solicitud
    xhr.send("fecha=" + encodeURIComponent(fecha) + "&hora=" + encodeURIComponent(hora));
     // Envía los datos de fecha y hora codificados en el cuerpo de la solicitud
}
</script>

</body>
</html>



