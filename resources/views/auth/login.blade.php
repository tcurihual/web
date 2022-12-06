<!DOCTYPE html>
@extends('starter')
@section('content')
    <div class="formulario">
        <form action="{{route('login-usuario')}}" method="post">
        @csrf
            <h2>Iniciar Sesion</h2>
            <label for="correo"><b>Correo</b></label>
            <input type="email" placeholder="Ingresa tu correo" name="correo" required>

            <label for="contrasena"><b>Contrasena</b></label>
            <input type="password" placeholder="Ingresa tu contrasena" name="contrasena" required>

            <button type="submit">Iniciar Sesion</button>
            <a href="{{url('/registro')}}">Aun no te registras? Hazlo aqui!</a>
        </form> 
    </div>
@endsection