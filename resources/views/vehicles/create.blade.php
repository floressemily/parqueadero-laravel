@extends('layouts.app')

@section('titulo', 'Nuevo Vehículo')

@section('contenido')

    <h1>Registrar Vehículo</h1>

    <form action="{{ route('vehicles.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Placa *</label>
            <input type="text" name="plate" class="form-control" required maxlength="10">
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo *</label>
            <select name="type" class="form-select" required>
                <option value="">Seleccione...</option>
                <option value="carro">Automóvil</option>
                <option value="moto">Motocicleta</option>
                <option value="camioneta">Camioneta</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Propietario</label>
            <input type="text" name="owner" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Observaciones</label>
            <textarea name="observations" class="form-control" rows="3"></textarea>
        </div>

        <a href="{{ route('vehicles.index') }}" class="btn btn-secondary">
            Cancelar
        </a>

        <button type="submit" class="btn btn-primary">
            Guardar
        </button>
    </form>

@endsection
