@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <img src="{{ asset('images/logo-gobierno.png') }}" alt="Logo del Gobierno" class="logo-image">
                    <br>
                    <br>
                    <h1 class="card-title">AGREGAR PROYECTO</h1>
                </div>

                <div class="card-body">
                    <form action="{{ route('proyectos.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="NombreProyecto">Nombre del Proyecto</label>
                            <input type="text" name="NombreProyecto" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="fuenteFondos">Fuente de Fondos</label>
                            <input type="text" name="fuenteFondos" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="MontoPlanificado">Monto Planificado</label>
                            <input type="number" name="MontoPlanificado" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="MontoPatrocinado">Monto Patrocinado</label>
                            <input type="number" name="MontoPatrocinado" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="MontoFondosPropios">Monto de Fondos Propios</label>
                            <input type="number" name="MontoFondosPropios" class="form-control" required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ url('/proyectos') }}" class="btn btn-secondary">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .logo-image {
        width: 100px;
        height: auto;
    }
</style>
@endsection

