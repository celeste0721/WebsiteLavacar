<?php
session_start(); // Iniciar sesión con la cuenta


    $conexion = mysqli_connect("mysql.hostinger.co.uk", "u330480167_user", "Admin12345$", "u330480167_name") or die("Problemas con la conexión");

/*$conexion = new mysqli("%", "Lavacar", "Lavacarblackandwhite", "baseproyecto");*/

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener datos del formulario
$correo = mysqli_real_escape_string($conexion, $_POST['correo']);
$contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);

// Verificar si el correo y la contraseña coinciden
$query = "SELECT id, contra FROM usuarios WHERE correo = '$correo'";
$result = $conexion->query($query);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc(); // Obtener la primera fila del resultado como un array asociativo
    if (password_verify($contrasena, $row['contra'])) {
         // Almacenar el ID de usuario en la sesión
        $_SESSION['user_id'] = $row['id']; 
        // Redirigir al usuario a la página de inicio
        header("Location: Prueba3.php");
          // Finalizar la ejecución del script actual
        exit();
    } else {
        echo "<script>window.alert('Contraseña incorrecta.'); window.location.href = 'login.php';</script>";
        // Mostrar una alerta y redirigir al usuario a la página de inicio de sesión (login.php)
    }
} else {
    echo "<script>window.alert('Correo no registrado.'); window.location.href = 'Regis.php';</script>";
    // Mostrar una alerta y redirigir al usuario a la página de registro (Regis.php)
}

$conexion->close();
?>







