@extends('starter')

@section('content')
<script defer src="../resources/js/audio_switches.js"></script>
<div style="text-align: center"> <!-- tabla de productos -->
    <table style="margin: 0 auto;">
        <thead>
            <tr> <!-- cabecera de la tabla -->
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Imagen Referencia</th>
            </tr>
        </thead>
        <tbody>
            <tr> <!-- primera fila de la tabla -->
                <td> Cherry MX Blue</td>
                <td>$9,990</td>
                <td>
                    <img src="../public/media/imgs/componentes/cherry_mx_blue.png" alt="">
                    <audio src="../public/media/audio/cherrymxblue.mp3" id="audioblue"></audio>
                    <button id="playblue">Play &#9658</button>
                </td>
            </tr>
            <tr> <!-- segunda fila de la tabla -->
                <td>Cherry MX Brown</td>
                <td>$9,990</td>
                <td>
                    <img src="../public/media/imgs/componentes/cherry_mx_brown.png" alt=""> 
                    <audio src="../public/media/audio/cherrymxbrown.mp3" id="audiobrown"></audio>
                    <button id="playbrown">Play &#9658</button>
                </td>
            </tr>
            <tr> <!-- tercera fila de la tabla -->
                <td>Plate Aluminio</td>
                <td>$40,000</td>
                <td><img src="../public/media/imgs/componentes/aluminium_plate.png" alt=""></td>
            </tr>
            <tr> <!-- cuarta fila de la tabla -->
                <td>Case 60%</td>
                <td>$80,000</td>
                <td><img src="../public/media/imgs/componentes/case_60.png" alt=""></td>
            </tr>    
        </tbody>
    </table>
    </div>
    <h2 id="textobonito">Si necesitas ayuda en el armado<br>Haz click aqui.</h2>
    <h3 id="textofeo"></h3>
    <button id="botoncito" type="button" onclick="redireccionar()">Tutorial</button>
    <script src="../resources/js/mostrar_videito.js"></script>
@endsection