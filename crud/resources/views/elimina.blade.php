<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Usuarios | Eliminación de Usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <script src="{{asset('js/campo.js')}}"></script>
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
        <h2>Eliminación de Usuarios</h2>
        <form action="{{ route('crud.delete') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="numID">Escriba el ID del usuario:</label>
            <input type="number" id="ID" name="ID" min="1" required>
        </div>
        <center><input type="submit" value="Eliminar Usuario"></center>
        </form>
    </div>

    <footer>© 2024 Israel Emiliano Gutiérrez Rabelo - Desarrollado con Laravel (PHP)</footer>

</body>
</html>