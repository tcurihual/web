<!DOCTYPE html>
@extends('starter')
@section('content')
    <div class="formulario">
        <form id="formx" method="POST">
            <h4>Ingresa tus datos y consultas, <br> te contactaremos lo más pronto posible!</h4>
            <input
             type="text"
             id="nombre"
             placeholder="Ingresa tu Nombre y Apellido" required>

            <input
             type="email"
             id="email"
             placeholder="Ingresa tu Correo" required>

            <input
             type="text"
             id="telefono"
             placeholder="Ingresa tu Numero de Telefono" required>

            <textarea
             id="mensaje"
             rows="10"
             placeholder="¿Cual es tu Consulta?" required></textarea>

            <button
             type="submit"
             onclick="alerta();">Enviar</button>
        </form>
    </div>
@endsection
