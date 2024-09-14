<?php
 include 'conexion.php';
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $email = $_POST['email'];
    $sql = "UPDATE usuarios SET nombre='$nombre',apellido='$apellido',documento='$documento',email='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Registro actualizado exitosamente</div>";
    } else {
        echo "<div class='alert alert-danger'>Error actualizando registro: " . $conn->error . "</div>";
    }
    $conn->close();
 }
 ?>