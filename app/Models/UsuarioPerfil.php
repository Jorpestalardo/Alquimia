<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioPerfil extends Model
{
    protected $table = 'usuarios';

    protected $primaryKey = 'usuario_id';
    protected $fillable = ['email', 'password', 'roles_id', 'nombre', 'apellido', 'biografia', 'libroPreferido', 'img', 'numero_celular'];
    public static function validationRules(): array {
        return [
            'nombre' => 'required',
            'apellido' => 'required',
        ];
    }

    public static function validationRulesAlerts(): array {
        return [
            'nombre.required' => 'Se solicita que ingrese su nombre',
            'apellido.required' => 'Se solicita que ingrese su apellido',

        ];
    }

    public function roles()
    {
        return $this->belongsTo(Roles::class, 'roles_id');
    }
}
