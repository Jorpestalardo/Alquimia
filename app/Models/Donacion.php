<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Donacion
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Donacion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Donacion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Donacion query()
 * @mixin \Eloquent
 */
class Donacion extends Model
{
    protected $primaryKey = 'donacion_id';
    protected $fillable = ['donacion_id', 'ubicacion_id', 'foto', 'estado', 'descripcion', 'fecha', 'tipo'];

    public static function validationRules(): array
    {
        return [
            'foto' => 'required', 
            'estado' => 'required',
            'descripcion' => 'required|min:20',
            'fecha' => 'required',
            'tipo' => 'required',
        ];
    }

    public static function validationMessages(): array
    {
        return [
            'foto.required' => 'Tenés que cargar una imagen del producto que quieras donar',
            'estado.required' => 'Tenés que seleccionar el estado de tu producto',
            'descripcion.required' => 'Tenés que escribir la descripción del producto que quieras donar',
            'descripcion.min' => 'La descripción no puede ser tan breve. Cuéntanos más',
            'fecha.required' => 'Tenés que escribir la fecha del producto que quieras donar',
            'tipo.required' => 'Tenés que escribir el tipo de material del producto que quieras donar',
        ];
    }

    public function ubicacion(): BelongsTo
    {
        return $this->belongsTo(Ubicacion::class, 'ubicacion_id', 'ubicacion_id');
    }
}
