@extends('layouts.app')

@section('content')

    <div class="text-center">
        <img src="{{ asset('images/logo-gobierno.png') }}" alt="Logo del Gobierno" style="width: 100px; height: auto; display: inline-block;">
        <br>
        <br>
        <h1 style="font-weight: bold; font-size: 24px;">Introducción a PHP y Laravel - G3.</h1>
        <div class="d-flex justify-content-center align-items-center mt-3">
            <h1 style="font-weight: bold; font-size: 24px;">Kevin Alexander Ocotán Morales.</h1>
        </div>
    </div>
    <div class="container mt-4">
        <p style="font-size: 18px;">¡Bienvenido al CRUD de proyectos de gobierno! En esta aplicación podrás gestionar y mantener un registro de proyectos de gobierno. Siéntete libre de explorar y administrar tus proyectos a tu conveniencia.</p>
        <a href="{{ url('/proyectos') }}" class="btn btn-primary">CRUD de Proyectos</a>
    </div>
@endsection
