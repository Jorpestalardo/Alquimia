<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;


/**
 * App\Models\Donacion
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Donacion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Donacion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Donacion query()
 * @mixin \Eloquent
 */
class Donaciones extends Model
{
    protected $primaryKey = 'donacion_id';
    protected $fillable = ['donacion_id','usuario_id','tipo_id', 'ubicacion_id','titulo', 'img', 'estado', 'descripcion', 'fecha', 'tipo'];

    public static function validationRules(): array
    {
        return [
            'titulo' => 'required|min:5',
            'img' => 'required', 
            'estado' => 'required',
            'descripcion' => 'required|min:20',
            'fecha' => 'required',
            'tipo_id' => 'required|numeric|exists:tipo',
        ];
    }

    public static function validationMessages(): array
    {
        return [
            'titulo.required' => 'Tenes que escribir un título',
            'titulo.min' => 'El título debe ser mayor a min:',
            'img.required' => 'Tenés que cargar una imagen del producto que quieras donar',
            'estado.required' => 'Tenés que seleccionar el estado de tu producto',
            'descripcion.required' => 'Tenés que escribir la descripción del producto que quieras donar',
            'descripcion.min' => 'La descripción no puede ser tan breve. Cuéntanos más',
            'fecha.required' => 'Tenés que escribir la fecha del producto que quieras donar',
            'tipo.required' => 'Tenés que escribir el tipo de material del producto que quieras donar',
            'tipo_id.required' => 'Tenés que elegir tu material',
            'tipo_id.numeric' => 'El ID del tipo debe ser un número',
            'tipo_id.exists' => 'El ID del tipo no existe',
        ];
    }

    public function ubicacion(): BelongsTo
    {
        return $this->belongsTo(Ubicacion::class, 'ubicacion_id', 'ubicacion_id');
    }

    public function tipo(): BelongsTo
    {
        return $this->belongsTo(Tipo::class, 'tipo_id', 'tipo_id');
    }

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuarios::class, 'usuario_id', 'usuario_id');
    }


}

