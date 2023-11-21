<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{

    protected $table = 'avatar';
    protected $primaryKey = 'avatar_id';


    public function usuarios()
    {
        return $this->hasMany(Usuarios::class, 'usuario_id', 'usuario_id');
    }

    public function usuarioPerfil()
    {
        return $this->hasMany(UsuarioPerfil::class, 'usuario_id', 'usuario_id');
    }
}