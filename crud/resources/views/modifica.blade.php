<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Usuarios | Modificación de Usuarios</title>
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
        <h2>Modificación de Datos de Usuario</h2>
        <form action="{{ route('crud.actualizar') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="numID">Escriba el ID del usuario:</label>
            <input type="number" id="ID" name="ID" min="1" required>
        </div>
        <div class="form-group">
            <select name="combo">
                <option value="SELECT">SELECIONA EL CAMPO A MODIFICAR</option>
                <option value="nombres">Nombres</option>
                <option value="apellidos">Apellidos</option>
                <option value="correo">Correo</option>
                <option value="celular">Celular</option>
                <option value="password">Contraseña</option>
            </select>
            <button type="button" onclick="tipoCampo()">Seleccionar campo</button><br>
        </div>

        <div class="form-group" id="campo">
        </div>


        </form>
    </div>

    <footer>© 2024 Israel Emiliano Gutiérrez Rabelo - Desarrollado con Laravel (PHP)</footer>

</body>
</html>