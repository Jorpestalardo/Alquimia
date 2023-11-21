<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * App\Models\Usuarios
 *
 * @property int $usuario_id
 * @property int $ubicacion_id
 * @property int $roles_id
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Usuarios newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Usuarios newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Usuarios query()
 * @method static \Illuminate\Database\Eloquent\Builder|Usuarios whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usuarios whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usuarios wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usuarios whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usuarios whereRolesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usuarios whereUbicacionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usuarios whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usuarios whereUsuarioId($value)
 * @mixin \Eloquent
 */
class Usuarios extends \Illuminate\Foundation\Auth\User
{
    use Notifiable;
    protected $primaryKey = 'usuario_id';
    protected $fillable = ['email', 'nombre', 'apellido', 'img', 'biografia', 'password', 'avatar_id', 'recovery_code', 'recovery_code_expires_at', 'ubicacion_id', 'roles_id', 'numero_celular'];
    protected $hidden = ['password', 'remember_token'];

    public static function validationRules(): array
    {
        return [
            'email' => 'required',
            'password' => 'required',
        ];
    }

    public static function validationMessages(): array
    {
        return [
            'email.required' => 'Se solicita que ingrese un correo electrónico',
            'password.required' => 'Se solicita que ingrese una contraseña',
        ];
    }

    public function roles()
    {
        return $this->belongsTo(Roles::class, 'roles_id');
    }

    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class, 'ubicacion_id');
    }

    public function avatar()
    {
        return $this->belongsTo(Avatar::class, 'avatar_id');
    }

    public function articulos()
    {
        return $this->hasMany(Articulos::class, 'usuario_id');
    }

    public function eventos()
    {
        return $this->hasMany(Eventos::class, 'eventos_id', 'eventos_id');
    }

    public function compras()
    {
        return $this->hasMany(Compras::class);
    }

    public function comentariosBlog()
    {
        return $this->hasMany(ComentariosBlog::class, 'comentarioblog_id', 'comentarioblog_id');
    }

    public function ComentariosEventos()
    {
        return $this->hasMany(ComentariosEventos::class, 'comentarioeventos_id', 'comentarioeventos_id');
    }

}