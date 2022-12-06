<!DOCTYPE HTML>
<head> <!-- etiquetas meta -->
    <meta name="robots" content="noindex">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <script defer src="../js/formulario.js"></script><!-- script de JS -->
    <script src="https://kit.fontawesome.com/5c3ff9a846.js" crossorigin="anonymous"></script>
    <title>KeyAll</title>
</head>
    <body>
        <nav>
        <ul> <!-- logo e interconexiones -->
            <li><a href="{{url('/')}}" class="logo">
                <img src="../public/media/imgs/logo.png" alt="logo">
                <span class="nav-item">KeyAll</span>
            </a></li>
            <li><a href="{{url('/productos')}}"> <!-- página productos -->
                <i class="fas fa-tag"></i>
                <span class="nav-item">Productos</span>
            </a></li>   
            <li><a href="{{url('/login')}}">
                <i class="fas fa-user"></i>
                <span class="nav-item">Login</span>
            </a></li>
            <li><a href="{{url('/quienes-somos')}}">  <!-- página about us -->
                <i class="fas fa-user-friends"></i>
                <span class="nav-item">Quienes Somos</span>
            </a></li>
            <li><a href="{{url('/contacto')}}"> <!-- página contactó -->
                <i class="fas fa-comment"></i>
                <span class="nav-item">Contactanos</span>
            </a></li>
            <li><a href="{{url('/mensajes')}}"> <!-- página contactó -->
                <i class="fas fa-comment-alt"></i>
                <span class="nav-item">Mensajes De <br> Nuestros Usuarios</span>
            </a></li>
        </ul>
        </nav> 
        
        @yield('content')
        
        <footer>KeyAll - Todos los Derechos Reservados</footer>
    </body>
</html>
