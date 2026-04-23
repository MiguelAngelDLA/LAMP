<?php
$host = 'db'; // Nombre del servicio en docker-compose
$user = getenv('MYSQL_USER') ?: 'usuario_pba';
$pass = getenv('MYSQL_PASSWORD') ?: 'password_usuario';
$db   = getenv('MYSQL_DATABASE') ?: 'mi_base_de_datos';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
echo "¡Conexión exitosa";
?>