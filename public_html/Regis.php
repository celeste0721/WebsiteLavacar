  
<!DOCTYPE html>
<html>
<head>
  <title>Bienvenidos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Regis.css">
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
    <a href="#" class="logo i">
        <img src="https://i.postimg.cc/br4YFVJ7/Proyecto.png" alt="Logo de la compañía">
    </a>
    ';

    include 'footer.php';

echo '

<form action="citasbases.php" method="post">

 <h1><i class="fa fa-id-card-o"></i> Registro </h1><br>


 <!-- Se generan cuadros de texto para recolectar informacion del usuario-->
    <input type="text" id="nombre" name="nombre" placeholder="Nombre" required><br><br>

    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo" placeholder="Correo Electronico" required><br><br>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required><br><br>

         <button type="submit" name="Confirmar">Confirmar</button>
              <p>  </p>
          <p> ¿Ya te registraste anteriormente?</p>

 <!-- se implementa JS para redireccionar al usuario-->

  <button type="button" onclick="redireccionarRegistro()">Iniciar Sesión</button>


</form>

    <script>
        function redireccionarRegistro() {
            window.location.href = "login.php";
        }
    </script>
';


  ?>

</body>
</html>

