<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Vehicle extends Model
{
    protected $table = 'vehicles';

    protected $fillable = [
        'plate',
        'type',
        'owner',
        'observations'
    ];

    // Obtener todos los vehículos
    public static function getVehicles()
    {
        return self::all();
    }

    // Obtener vehículo por ID
    public static function getVehicleById($id)
    {
        return self::find($id);
    }

    // Crear vehículo
    public static function createVehicle(Request $request)
    {
        return self::create($request->all());
    }

    // Actualizar vehículo
    public static function updateVehicle(Vehicle $vehicle, Request $request)
    {
        return $vehicle->update($request->all());
    }

    // Eliminar vehículo
    public static function deleteVehicle(Vehicle $vehicle)
    {
        return $vehicle->delete();
    }
}
