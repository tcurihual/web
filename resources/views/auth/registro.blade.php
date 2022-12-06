<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('registro-usuario')}}" method="post" style="border:1px solid #ccc">
    @if (Session::has('success'))
    <div>{{Session::get('success')}}</div>
    @endif(Session::has('fail'))
    <div>{{Session::get('fail')}}</div>
    @csrf
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="nombre"><b>Nombre</b></label>
    <input type="text" placeholder="Ingresa tu Nombre" name="nombre" required>

    <label for="correo"><b>Correo</b></label>
    <input type="text" placeholder="Enter Correo" name="correo" required>

    <label for="contrasena"><b>Contrasena</b></label>
    <input type="password" placeholder="Enter Contrasena" name="contrasena" required>

    <button type="submit" class="signupbtn">Sign Up</button>
  </div>
</form>
</body>
</html>