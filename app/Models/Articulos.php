<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    use HasFactory;
    protected $table = 'articulos';

    // protected $fillable = ['usuario_id', 'mercado_id'];
    protected $primaryKey = 'articulo_id';

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'usuario_id');
    }

    public function mercado()
    {
        return $this->belongsTo(Mercado::class, 'mercado_id');
    }
}
