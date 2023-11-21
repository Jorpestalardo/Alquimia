<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Mercado
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Mercado newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mercado newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mercado query()
 * @mixin \Eloquent
 */
class Mercado extends Model
{
    protected $table = 'mercado';
    protected $primaryKey = 'mercado_id';
    protected $fillable = ['mercado_id', 'ubicacion_id', 'usuario_id', 'foto', 'caracteristica', 'precio', 'titulo', 'autor'];

    public static function validationRules(): array
    {
        return [
            'foto' => 'required',
            'caracteristica' => 'required|min:20', 
            'precio' => 'required|numeric',
            'titulo' => 'required',
            'autor' => 'required',
        ];
    }

    public static function validationMessages(): array
    {
        return [
            'titulo.required' => 'Tenés que escribir el título del producto',
            'foto.required' => 'Tenés que cargar la imagen del producto',
            'caracteristica.required' => 'Tenés que escribir la característica del producto',
            'caracteristica.min' => 'La característica no puede ser tan breve. Cuéntanos más',
            'precio.required' => 'Tenés que escribir el precio del producto',
            'precio.numeric' => 'El precio del producto tiene que ser un número',
            'autor.required' => 'Tenés que escribir el nombre del autor',
        ];
    }
    public function ubicacion(): BelongsTo
    {
        return $this->belongsTo(Ubicacion::class, 'ubicacion_id', 'ubicacion_id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'usuario_id');
    }
    public function articulos()
    {
        return $this->hasMany(Articulos::class, 'articulo_id');
    }


}
