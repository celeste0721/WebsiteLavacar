<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Se genera la conexión con la base
    $conexion = mysqli_connect("mysql.hostinger.co.uk", "u330480167_user", "Admin12345$", "u330480167_name") or die("Problemas con la conexión");

    // Se llaman los datos ingresados por los usuarios
    $fechaSeleccionada = mysqli_real_escape_string($conexion, $_POST['fecha']);
    $horaSeleccionada = mysqli_real_escape_string($conexion, $_POST['hora']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);

    // Se ejecuta la consulta para insertar los datos en la tabla citas
    $insert_query = "INSERT INTO citas (fecha, hora, disponible, correo) VALUES ('$fechaSeleccionada', '$horaSeleccionada', 1, '$correo')";

    if (mysqli_query($conexion, $insert_query)) {
        // Se cierra la conexión a la base
        mysqli_close($conexion);

        // Mensaje de confirmación para el usuario
        $confirmacionUsuario = "Tu cita para la fecha $fechaSeleccionada a las $horaSeleccionada se ha confirmado exitosamente, Por Favor revisa tu correo Spam. \n";
        $confirmacionUsuario .= "Esperamos verte pronto. Si tienes alguna pregunta, no dudes en contactarnos al telefono 8467-5587.";

        // Envío del correo de confirmación
        $to = $correo;
        $subject = "CONFIRMACION DE LA CITA LAVACAR BLACK AND WHITE";
        $mensajeCorreo = "Tu cita para la fecha $fechaSeleccionada a las $horaSeleccionada se ha confirmado exitosamente. \n";
        $mensajeCorreo .= "Esperamos verte pronto. Si tienes alguna pregunta, no dudes en contactarnos al telefono 8467-5587.";

        $headers = "From: reservaciones@lavacarblackandwhite.com" . "\r\n" .
            "Reply-To: reservaciones@lavacarblackandwhite.com" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

        if (mail($to, $subject, $mensajeCorreo, $headers)) {
            $mensajeExito = "La cita se añadió correctamente y se ha enviado un correo de confirmación.";
        } else {
            $mensajeExito = "La cita se añadió correctamente, pero hubo un problema al enviar el correo de confirmación.";
        }
    } else {
        $mensajeError = "Hubo un problema al agregar la cita: " . mysqli_error($conexion);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Bienvenidos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Confirmar.css">
</head>
<body>
  <?php
    echo '
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
    <a href="#" class="logo">
        <img src="https://i.postimg.cc/br4YFVJ7/Proyecto.png" alt="Logo de la compañía">
    </a>';

    include 'footer.php';

echo '
<div>
    <div class="banner">
        <div class="capa"></div>
        <div class="info">
            <h1>Lavacar Black & White</h1>';
            
            
            
            
            if (isset($mensajeExito)) {
    echo '<p>' . $mensajeExito . '</p>';
}

if (isset($mensajeError)) {
    echo '<p>' . $mensajeError . '</p>';
}

if (isset($confirmacionUsuario)) {
    echo '<p>' . $confirmacionUsuario . '</p>';
}

     
            


echo '
        </div>
    </div>
</div>';

  ?>
</body>
</html>





