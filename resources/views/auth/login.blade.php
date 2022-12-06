<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-  Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('login-usuario')}}" method="post">
        @csrf
        <div class="container">
            <label for="correo"><b>Correo</b></label>
            <input type="email" placeholder="Ingresa tu correo" name="correo" required>

            <label for="contrasena"><b>Contrasena</b></label>
            <input type="password" placeholder="Ingresa tu contrasena" name="contrasena" required>

              <button type="submit">Iniciar Sesion</button>
        </div>
    </form> 
</body>
</html>