<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "usuario", "contraseña", "basedatos");

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Recuperar los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

// Consulta SQL para insertar los datos en la tabla de usuarios
$sql = "INSERT INTO usuarios (nombre, email, contrasena) VALUES ('$nombre', '$email', '$contrasena')";

if ($conexion->query($sql) === TRUE) {
    echo "Usuario registrado correctamente";
} else {
    echo "Error al registrar usuario: " . $conexion->error;
}

// Cerrar conexión
$conexion->close();
?>
