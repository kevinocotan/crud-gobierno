@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h1 class="mb-3 text-center">PROYECTOS - GOBIERNO DE EL SALVADOR</h1>
            <a href="{{ route('proyectos.create') }}" class="btn btn-success mr-2">
                <i class="fas fa-plus"></i> Agregar
            </a>
            <a href="{{ route('informes') }}" class="btn btn-info">
                <i class="fas fa-file-pdf"></i> Ver Informes
            </a>
        </div>
        <img src="{{ asset('images/logo-gobierno.png') }}" alt="Logo del Gobierno" style="width: 100px; height: auto;">
    </div>
    <br>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
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
                        <div class="btn-group" role="group">
                            <a href="{{ route('proyectos.edit', $proyecto->id) }}" class="btn btn-primary" title="Editar">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" title="Eliminar" onclick="return confirm('¿Estás seguro de que deseas eliminar este proyecto?');">
                                    <i class="fas fa-trash-alt"></i> Eliminar
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
