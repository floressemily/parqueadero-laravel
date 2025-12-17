@extends('layouts.app')

@section('titulo', 'Editar Vehículo')

@section('contenido')

    <h1>Editar Vehículo</h1>

    <form action="{{ route('vehicles.update', $vehicle) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Placa *</label>
            <input type="text"
                   name="plate"
                   class="form-control"
                   value="{{ $vehicle->plate }}"
                   required
                   maxlength="10">
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo *</label>
            <select name="type" class="form-select" required>
                <option value="carro" {{ $vehicle->type == 'carro' ? 'selected' : '' }}>
                    Automóvil
                </option>
                <option value="moto" {{ $vehicle->type == 'moto' ? 'selected' : '' }}>
                    Motocicleta
                </option>
                <option value="camioneta" {{ $vehicle->type == 'camioneta' ? 'selected' : '' }}>
                    Camioneta
                </option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Propietario</label>
            <input type="text"
                   name="owner"
                   class="form-control"
                   value="{{ $vehicle->owner }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Observaciones</label>
            <textarea name="observations"
                      class="form-control"
                      rows="3">{{ $vehicle->observations }}</textarea>
        </div>

        <a href="{{ route('vehicles.index') }}" class="btn btn-secondary">
            Cancelar
        </a>

        <button type="submit" class="btn btn-primary">
            Actualizar
        </button>
    </form>

@endsection
