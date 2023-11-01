@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center mb-4">
            <img src="{{ asset('images/logo-gobierno.png') }}" alt="Logo del Gobierno" class="logo-image">
            <br>
            <br>
            <h1 class="mb-0">INFORMES DE PROYECTOS</h1>
        </div>
        <div class="text-left mb-3">
            <a href="{{ route('proyectos.index') }}" class="btn btn-info">
                <i class="fas fa-arrow-right"></i> Regresar
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre del Proyecto</th>
                        <th>Fuente de Fondos</th>
                        <th>Monto Planificado</th>
                        <th>Monto Patrocinado</th>
                        <th>Monto de Fondos Propios</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($proyectos as $proyecto)
                        <tr>
                            <td>{{ $proyecto->id }}</td>
                            <td>{{ $proyecto->NombreProyecto }}</td>
                            <td>{{ $proyecto->fuenteFondos }}</td>
                            <td>${{ number_format($proyecto->MontoPlanificado, 2) }}</td>
                            <td>${{ number_format($proyecto->MontoPatrocinado, 2) }}</td>
                            <td>${{ number_format($proyecto->MontoFondosPropios, 2) }}</td>
                            <td>
                                <a href="{{ route('proyectos.downloadPDF', $proyecto->id) }}" class="btn btn-info" title="Descargar PDF">
                                    <i class="fas fa-file-pdf"></i> Generar PDF
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <style>
        .logo-image {
            width: 100px;
            height: auto;
        }
    </style>
@endsection
