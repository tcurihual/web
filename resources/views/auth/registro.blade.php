<!DOCTYPE html>
@extends('starter')
@section('content')

  <div class="formulario">
    <form action="{{route('registro-usuario')}}" method="post">
    @if (Session::has('success'))
    <div>{{Session::get('success')}}</div>
    @endif(Session::has('fail'))
    <div>{{Session::get('fail')}}</div>
    @csrf
    <h2>Registrarse</h2>
    
    <label for="nombre"><b>Nombre</b></label>
    <input type="text" placeholder="Ingresa tu Nombre" name="nombre" required>

    <label for="correo"><b>Correo</b></label>
    <input type="text" placeholder="Ingresa tu Correo" name="correo" required>

    <label for="contrasena"><b>Contrasena</b></label>
    <input type="password" placeholder="Ingresa tu Contrasena" name="contrasena" required>

    <button type="submit" class="signupbtn">Enviar</button>
    </form>
</div>
@endsection