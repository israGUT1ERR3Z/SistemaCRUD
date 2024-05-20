<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Usuarios</title>
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
    @if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Celular</th>
                        <th>Contraseña</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $user)
                    <tr>
                        <td data-title="ID">{{$user->ID}}</td>
                        <td data-title="Nombres">{{$user->Nombres}}</td>
                        <td data-title="Apellidos">{{$user->Apellidos}}</td>
                        <td data-title="Correo">{{$user->Correo}}</td>
                        <td data-title="Celular">{{$user->Celular}}</td>
                        <td class="scrollable" data-title="Contraseña">{{$user->Password}}</td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
            <div class="aviso">
                <p><center>***Todas las contraseñas están encriptadas por medio de SHA-256***</center></p>
            </div>
    </div>
    

    <footer>© 2024 Israel Emiliano Gutiérrez Rabelo - Desarrollado con Laravel (PHP)</footer>

</body>
</html>