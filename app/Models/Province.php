<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'province';

	public function cities()
    {
        return $this->hasMany(City::class, 'city_id', 'city_id');
    }

	public function ubicacion(){
        return $this->belongsTo(Ubicacion::class, 'ubicacion_id', 'ubicacion_id');
    }
}
