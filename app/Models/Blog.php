<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Blog
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @mixin \Eloquent
 */
class Blog extends Model
{
    protected $table = 'blog';

    protected $primaryKey = 'blog_id';
    protected $fillable = ['titulo', 'img', 'subtitulo', 'usuario_id', 'descripcion', 'texto', 'conclusion', 'autor', 'fechaPublicacion'];

    public static function validationRules(): array
    {
        return [
            'titulo' => 'required|min:10', 
            'subtitulo' => 'required|min:10', 
            'img' => 'required',
            'descripcion' => 'required|min:10',
            'texto' => 'required|min:20',
            'conclusion' => 'required|min:10',
            'fechaPublicacion' => 'required',
            'autor' => 'required',
        ];
    }

    public static function validationMessages(): array
    {
        return [
            'titulo.required' => 'Tenés que escribir el título de la novedad',
            'titulo.min' => 'El título del blog no debe de ser tan breve',
            'subtitulo.required' => 'Tenés que escribir el subtítulo de la novedad',
            'subtitulo.min' => 'El subtítulo del blog no debe de ser tan breve',
            'img.required' => 'Tenés que cargar la imagen de la portada',
            'descripcion.required' => 'Tenés que escribir la descripción de la novedad',
            'descripcion.min' => 'La descripción no puede ser tan breve. Cuéntanos más',
            'texto.required' => 'Tenés que escribir el contenido de la novedad',
            'texto.min' => 'El contenido no puede ser tan breve. Cuéntanos más',
            'conclusion.required' => 'Tenés que escribir la conclusión de la novedad',
            'conclusion.min' => 'La conclusión no puede ser tan breve. Cuéntanos más',
            'fechaPublicacion.required' => 'Tenés que escribir la fecha de publicación de la novedad',
            'autor.required' => 'Tenés que escribir el nombre del autor',
        ];
    }


    public function etiquetas(): BelongsToMany
    {
        return $this->belongsToMany(
            Etiquetas::class,
            'blog_have_etiquetas',
            'blog_id',
            'etiquetas_id',
            'blog_id',
            'etiquetas_id',
        );

    }

    public function getEtiquetasIdChecked(): array
    {
        return $this->etiquetas()->pluck('etiquetas.etiquetas_id')->all();
    }

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'usuario_id', 'usuario_id');
    }
    
    public function comentariosBlog()
    {
        return $this->hasMany(ComentariosBlog::class, 'comentarioblog_id', 'comentarioblog_id');
    }

}
