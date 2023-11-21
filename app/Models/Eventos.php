<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Eventos
 *
 * @property int $eventos_id
 * @property int $ubicacion_id
 * @property string $titulo
 * @property string $descripcion
 * @property string $imagen
 * @property string $fecha
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Eventos newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Eventos newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Eventos query()
 * @method static \Illuminate\Database\Eloquent\Builder|Eventos whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Eventos whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Eventos whereEventosId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Eventos whereFecha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Eventos whereImagen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Eventos whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Eventos whereUbicacionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Eventos whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Eventos extends Model
{
    protected $primaryKey = 'eventos_id';

    protected $fillable = ['eventos_id', 'ubicacion_id', 'usuario_id', 'titulo', 'descripcion', 'img', 'fecha', 'autor'];

    public static function validationRules(): array
    {
        return [
            'descripcion' => 'required|min:20',
            'titulo' => 'required', 
            'img' => 'required',
            'fecha' => 'required',
            'autor' => 'required'
        ];
    }

    public static function validationMessages(): array
    {
        return [
            'titulo.required' => 'Tenés que escribir el título del evento',
            'img.required' => 'Tenés que cargar la imagen de la portada del evento',
            'descripcion.required' => 'Tenés que escribir la descripción del evento',
            'descripcion.min' => 'La descripción no puede ser tan breve. Cuéntanos más sobre el evento',
            'fecha.required' => 'Tenés que escribir la fecha de publicación del evento',
            'autor.required' => 'Escribir nombre del autor' 
        ];
    }
    
    public function usuario(){
        return $this->belongsTo(Usuarios::class, 'usuario_id', 'usuario_id');
    }

    public function ubicacion(){
        return $this->belongsTo(Ubicacion::class, 'ubicacion_id', 'ubicacion_id');
    }

    public function ComentariosEventos()
    {
        return $this->hasMany(ComentariosEventos::class, 'comentarioeventos_id', 'comentarioeventos_id');
    }

}
