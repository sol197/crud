<?php
 include 'conexion.php';
 $id = $_GET['id'];
 $sql = "DELETE FROM usuarios WHERE id=$id";
 if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success'>Registro eliminado exitosamente</div>";
 } else {
    echo "<div class='alert alert-danger'>Error eliminando registro: " . $conn->error . "</div>";
 }
 $conn->close();
 ?>