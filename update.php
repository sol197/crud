<?php

include 'conexion.php';

$id = $_GET['id']; $sql = "SELECT * FROM usuarios WHERE id=$id"; $result =
$conn->query($sql);
$row = $result->fetch_assoc();
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización/Edición</title>
</head>
<body>
    <form action="update_process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $row['apellido']; ?>"required> 
        </div>
        <div class="mb-3">
            <label for="documento" class="form-label">Documento:</label>
            <input type="text" class="form-control" id="documento" name="documento" value="<?php echo $row['documento']; ?>"required> 
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>"required> 
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button> 
    </form>
</body>
</html>