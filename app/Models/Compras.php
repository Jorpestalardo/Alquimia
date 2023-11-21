<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;

    protected $table = 'compras';

    // protected $fillable = ['usuario_id', 'mercado_id'];
    protected $primaryKey = 'compra_id';

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'usuario_id');
    }

    public function mercado()
    {
        return $this->belongsTo(Mercado::class, 'mercado_id');
    }
}
