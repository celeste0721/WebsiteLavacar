<!DOCTYPE html>
<html>
<head>
  <title>Servicios</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="paquete.css">
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
    </a>
    ';

    include 'footer.php';

    echo '

    <h1>Paquetes</h1>
    <h1>Black & White Lavacar</h1>
    <br><br>
    <br><br>

    <div class="galeria">
    <div class="card">
    <h3>Básico</h3>
    <br><br>
      

 <!-- cuadros de texto desplegados con un icono al frente-->

        <p><i class="fa fa-check  fa-lg" style = "color: goldenrod "></i> Lavado de Carrocería.</p><br>
        <p><i class="fa fa-check  fa-lg" style = "color: goldenrod "></i> Aspirado de Asientos.</p><br>
        <p><i class="fa fa-check  fa-lg" style = "color: goldenrod "></i> Aspirado de Alfombras.</p><br>
        <p><i class="fa fa-check  fa-lg" style = "color: goldenrod "></i> Silicona a las Llantas.</p><br>
        <br><br><br><br><br><br><br><br>

         <!-- boton que redirige-->
        <a href="citas.php" class="boton">Agendar</a>
      </div>
  <div class="card">
    <h3>Premium</h3>
    <br><br>


 <!-- cuadros de texto desplegados con un icono al frente-->
        <p><i class="fa fa-check  fa-lg" style = "color: goldenrod "></i> Limpieza detallada de aros.</p><br>
        <p><i class="fa fa-check  fa-lg" style = "color: goldenrod "></i> Aplicación de shampoo PH neutro Meguiar’s.</p><br>
        <p><i class="fa fa-check  fa-lg" style = "color: goldenrod "></i> Aplicación de cera Meguiar’s Hi-Tech a la carrocería.</p><br>
        <p><i class="fa fa-check  fa-lg" style = "color: goldenrod "></i> Aplicación de restaurador de partes negras externas.</p><br>
        <p><i class="fa fa-check  fa-lg" style = "color: goldenrod "></i> Detallado para Dash e hidratador de cueros.</p><br>
        <p><i class="fa fa-check  fa-lg" style = "color: goldenrod "></i> Limpieza de alfombras y un aspirado profundo.</p><br>
        <br><br><br><br>
                <a href="citas.php" class="boton">Agendar</a>

  </div>  
  </div> 



    ';

    

  ?>
</body>
</html>
