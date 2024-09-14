<?php

include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_post['apellido'];
    $documento = $_post['documento'];
    $email = $_POST['email'];

    $sql = "INSERT INTO usuarios (nombre,apellido,documento,email) VALUES ('$nombre','$apellido','$documento','$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Nuevo registro creado exitosamente</div>";
    } 
    else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
 }
$conn->close()


?>