@extends('layouts.app')

@section('titulo', 'Vehículos')

@section('contenido')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Vehículos en el parqueadero</h1>

        <a href="{{ route('vehicles.create') }}" class="btn btn-primary">
            Nuevo vehículo
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-dark">
            <tr>
                <th>Placa</th>
                <th>Tipo</th>
                <th>Propietario</th>
                <th>Ingreso</th>
                <th>Acciones</th>
            </tr>
            </thead>

            <tbody>
            @foreach($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->plate }}</td>
                    <td>{{ ucfirst($vehicle->type) }}</td>
                    <td>{{ $vehicle->owner ?? '-' }}</td>
                    <td>{{ $vehicle->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('vehicles.edit', $vehicle) }}"
                           class="btn btn-sm btn-warning">
                            Editar
                        </a>

                        <form action="{{ route('vehicles.destroy', $vehicle) }}"
                              method="POST"
                              class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('¿Marcar este vehículo como salido?')">
                                Salida
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
