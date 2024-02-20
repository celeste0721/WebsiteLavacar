<!DOCTYPE html>
<html>
<head>
  <title>Filosofia Empresarial</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Preguntas.css">

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


    <a href="#" class="logo">
        <img src="https://i.postimg.cc/br4YFVJ7/Proyecto.png" alt="Logo de la compañía">

    </ul>
 <div class="container">
        <header></header>
        <main class="content">

            <article class="article">
                <a>Preguntas Frecuentes</a>
            </article>


            <article class="article">

                 <h1>¿Cuáles son los tipos de lavado que ofrecen?</h1>
               <a>Ofrecemos lavado exterior, lavado completo y lavado premium que incluye limpieza interior.</a>
     
            </article>

            <article class="article">
               <h1>¿Necesito hacer una cita obligatoriamente?</h1>
               <a>No es necesario hacer una cita, aceptamos tanto citas como clientes sin cita previa.</a>
       
            </article>
            <article class="article">
                  <h1>¿Qué métodos de pago aceptan?</h1>
            <a>Aceptamos efectivo, tarjetas de crédito y débito.El pago se realiza una vez finalizado el servicio</a>
         
                </article>


                <article class="article">
                 <h1>¿Cómo puedo cancelar la cita?</h1>
                <a>Para ello, debes de contactarnos a nuestro número de telefono 8467-5587</a>

                </article>

        </main>
    </div>

    </ul>';

    include 'footer.php';


  ?>


</body>
</html>

