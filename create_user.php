<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Registro</title> 
    <link real="stylesheet"href="estilos.css">
</head>

<body>
    <h2>Crear Nuevo Registro</h2>
    <form action="create.php" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        </br>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        </br>
        <div class="mb-3">
            <label for="documento" class="form-label">Documento:</label>
            <input type="number" class="form-control" id="documento" name="documento" required>
        </div>
        </br>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
             <input type="email" class="form-control" id="email" name="email" required>
        </div>
        </br>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</body>
</html>