<?php
    $conexion = mysqli_connect("mysql.hostinger.co.uk", "u330480167_user", "Admin12345$", "u330480167_name") or die("Problemas con la conexión");

$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);//se llaman las variables llenadas por los usuarios
$correo = mysqli_real_escape_string($conexion, $_POST['correo']);
$contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);

$contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT); //se cifra la contraseña

// Verificar si el correo ya está registrado
$verificar_query = "SELECT * FROM usuarios WHERE Correo = '$correo'";
$verificar_result = mysqli_query($conexion, $verificar_query);

if (mysqli_num_rows($verificar_result) > 0) {
    echo "<script>window.alert('El correo ya está registrado en el sistema.'); window.location.href = 'login.php';</script>"; 
} else {
    $insert_query = "INSERT INTO usuarios (Nombre, Correo, Contra) VALUES ('$nombre', '$correo', '$contrasena_hash')"; //Insert corriente a la base
    
    $result = mysqli_query($conexion, $insert_query);
    
    if ($result) {
        echo "El usuario fue registrado correctamente.";
         header("Location: Prueba3.php"); //Redirige el usuario a sacar la cita
    } else {
        echo "Hubo un problema al registrar el usuario: " . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?>
