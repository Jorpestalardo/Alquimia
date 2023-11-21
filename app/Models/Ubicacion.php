<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Ubicacion
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Ubicacion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ubicacion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ubicacion query()
 * @mixin \Eloquent
 */
class Ubicacion extends Model
{
    protected $table = 'ubicacion';
    protected $primaryKey = 'ubicacion_id';
    protected $fillable = ['ubicacion_id', 'province_id', 'city_id'];


    public function eventos(){
        return $this->hasMany(Eventos::class, 'eventos_id', 'eventos_id');
    }

    public function province(){
        return $this->belongsTo(Province::class, 'province_id', 'province_id');
    }

    public function city(){
        return $this->belongsTo(City::class, 'city_id', 'city_id');
    }
    
}
