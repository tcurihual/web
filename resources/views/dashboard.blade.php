<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>Dashboard</h4>
    <hr>
    <table class="tabla">
        <thead>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Action</th>
        </thead>
        <tbody>
            <tr>
                <td>{{$data->nombre}}</td>
                <td>{{$data->correo}}</td>
                <td><a href="logout">Cerrar Sesion</a></td>
            </tr>
        </tbody>
    </table>
</body>
</html>