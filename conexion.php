<?php
 $servername = "localhost";
 $username = "upso_crud";
 $password = "crud";
 $dbname = "upso_crud";
 // Crear conexión
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Verificar conexión
 if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
 }
 ?>
