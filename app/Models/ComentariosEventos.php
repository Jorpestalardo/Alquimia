<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentariosEventos extends Model
{
    protected $primaryKey = 'comentarioeventos_id';

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'usuario_id', 'usuario_id');
    }

    public function eventos()
    {
        return $this->belongsTo(Eventos::class, 'eventos_id', 'eventos_id');
    }
}
