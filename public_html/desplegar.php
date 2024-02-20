<!DOCTYPE html>
<html>
<head>
    <title>Horario</title>
    <!-- Enlace a la hoja de estilos de font-awesome para iconos de redes sociales -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Enlace a la hoja de estilos personalizada "desplegar.css" -->
    <link rel="stylesheet" href="desplegar.css">
</head>
<body>
    <!-- Lista no ordenada (menú de navegación) -->
    <ul>
        <!-- Elemento de lista con icono de barras para desplegar menú -->
        <li>
            <a href="#"><i class="fa fa-bars"></i></a>
            <!-- Menú desplegable dentro del elemento de lista -->
            <ul class="dropdown">
                <li><a href="servicio.php">Servicio</a></li>
                <li><a href="Horario.php">Horarios</a></li>
                <li><a href="">Preguntas Frecuentes</a></li>
                <li><a href="desplegar.php">Citas</a></li>
                <li><a href="paquete.php">Paquetes</a></li>
            </ul>
        </li>
        <!-- Elementos de lista para enlaces de navegación -->
        <li><a href="Inicio.php">Inicio</a></li>
        <li><a href="Contacto.php">Contacto</a></li>
        <li><a href="Filo.php">Sobre Nosotros</a></li>
    </ul>

    <!-- Enlace con clase "logo" que contiene la imagen del logotipo de la compañía -->
    <a href="#" class="logo">
        <img src="https://i.postimg.cc/br4YFVJ7/Proyecto.png" alt="Logo de la compañía">
    </a>

    <!-- Encabezado h1 para "Citas Agendadas" -->
    <h1>Citas Agendadas</h1>

    <?php
    // Conexión a la base de datos
    $conexion = mysqli_connect("mysql.hostinger.co.uk", "u330480167_user", "Admin12345$", "u330480167_name") or die("Problemas con la conexión");
    
    // Consulta para seleccionar registros de la tabla "citas"
    $consulta = "SELECT fecha, hora, disponible, correo FROM citas";
    $registros = mysqli_query($conexion, $consulta) or die("Problemas en el select: " . mysqli_error($conexion));

    // Verificación si hay registros en la base de datos
    if (mysqli_num_rows($registros) === 0) {
        echo "No se encontraron registros.";
    } else {
        // Generar tabla con datos de la base de datos
        echo '<table class="center-table">';
        echo "<tr><th>Fecha</th><th>Hora</th><th>Disponible</th><th>Correo</th></tr>";

        while ($reg = mysqli_fetch_array($registros)) {
            echo "<tr>";
            echo "<td>" . $reg['fecha'] . "</td>";
            echo "<td>" . $reg['hora'] . "</td>";
            echo "<td>" . $reg['disponible'] . "</td>";
            echo "<td>" . $reg['correo'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }

    // Cerrar conexión a la base de datos
    mysqli_close($conexion);
    ?>
</body>
</html>

