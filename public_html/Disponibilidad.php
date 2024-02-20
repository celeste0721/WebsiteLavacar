<?php

$fechaSeleccionada = $_POST['fecha'];
$horaSeleccionada = $_POST['hora'];

    $conexion = mysqli_connect("mysql.hostinger.co.uk", "u330480167_user", "Admin12345$", "u330480167_name") or die("Problemas con la conexión");

/*$conexion = mysqli_connect("%", "root", "", "baseproyecto") or die("Problemas con la conexión");*/

// Escapar la fecha y la hora para evitar problemas de seguridad
$fechaSeleccionada = mysqli_real_escape_string($conexion, $fechaSeleccionada);
$horaSeleccionada = mysqli_real_escape_string($conexion, $horaSeleccionada);

// Verificar disponibilidad de la cita
$sql = "SELECT * FROM citas WHERE fecha = '$fechaSeleccionada' AND hora = '$horaSeleccionada' AND disponible = 1";
$result = mysqli_query($conexion, $sql);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        echo "$horaSeleccionada No disponible.";
    
    } else {
        echo "$horaSeleccionada Disponible.";
    }
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}


mysqli_close($conexion);


?>
 



