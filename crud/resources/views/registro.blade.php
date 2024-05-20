<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Usuarios | Registro de Usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body>
    <br><br><header><center><b>SISTEMA DE GESTIÓN DE USUARIOS</b></center></header><br><br>
    <nav>
        <a href="{{ route('crud.index') }}">Ver Datos</a>
        <a href="{{ route('crud.registro') }}">Agregar Usuario</a>
        <a href="{{ route('crud.modifica') }}">Modificar Información</a>
        <a href="{{ route('crud.elimina') }}">Eliminar Información</a>
    </nav><br><br>
    
    <div class="container">
        <h2>Registro de Usuario</h2>
        <form action="{{ route('crud.subir') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input type="text" id="nombres" name="nombres" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div class="form-group">
                <label for="celular">Celular:</label>
                <input type="tel" id="celular" name="celular" pattern="[0-9]{10}" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <center><input type="submit" value="Registrarse"></center>
        </form>
    </div>

    <footer>© 2024 Israel Emiliano Gutiérrez Rabelo - Desarrollado con Laravel (PHP)</footer>

</body>
</html>