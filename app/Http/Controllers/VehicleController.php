<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    // Listado
    public function index()
    {
        $vehicles = Vehicle::getVehicles();
        return view('vehicles.index', compact('vehicles'));
    }

    // Formulario crear
    public function create()
    {
        return view('vehicles.create');
    }

    // Guardar
    public function store(Request $request)
    {
        $request->validate([
            'plate' => 'required|max:10',
            'type'  => 'required',
        ]);

        Vehicle::createVehicle($request);

        return redirect()->route('vehicles.index')
            ->with('success', 'Vehículo registrado.');
    }

    // Formulario editar
    public function edit(Vehicle $vehicle)
    {
        return view('vehicles.edit', compact('vehicle'));
    }

    // Actualizar
    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'plate' => 'required|max:10',
            'type'  => 'required',
        ]);

        Vehicle::updateVehicle($vehicle, $request);

        return redirect()->route('vehicles.index')
            ->with('success', 'Vehículo actualizado.');
    }

    // Eliminar
    public function destroy(Vehicle $vehicle)
    {
        Vehicle::deleteVehicle($vehicle);

        return redirect()->route('vehicles.index')
            ->with('success', 'Vehículo eliminado.');
    }
}
