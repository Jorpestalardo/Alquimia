<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Empresas extends Model
{
    protected $primaryKey = 'empresa_id';
    protected $fillable = ['empresa_id', 'usuario_id', 'tituloEmpresa', 'tituloProducto', 'descripcion', 'img', 'fechaPublicacion', 'link', 'autor'];

    public static function validationRules(): array
    {
        return [
            'tituloEmpresa' => 'required', 
            'tituloProducto' => 'required',
            'descripcion' => 'required|min:20',
            'img' => 'required',
            'fechaPublicacion' => 'required',
            'link' => 'required',
            'autor' => 'required'
        ];
    }

    public static function validationMessages(): array
    {
        return [
            'tituloEmpresa.required' => 'Tenés que escribir el nombre de la empresa.',
            'tituloProducto.required' => 'Tenés que escribir el nombre de la nota o producto.',
            'descripcion.required' => 'Tenés que escribir la descripción del producto que quieras donar.',
            'descripcion.min' => 'La descripción no puede ser tan breve. Cuéntanos más.',
            'img.required' => 'Tenés que cargar una imagen del producto que quieras donar.',
            'fechaPublicacion.required' => 'Tenés que escribir la fecha de la publicación.',
            'link.required' => 'Tenés que escribir el enlace que resplade la información.',
            'autor.required' => 'Tenés que escribir el nombre del autor.',
        ];
    }

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuarios::class, 'usuario_id', 'usuario_id');
    }
}
