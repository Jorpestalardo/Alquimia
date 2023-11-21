<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';


	public function province(){
        return $this->belongsTo(Province::class, 'province_id', 'province_id');
    }

	public function ubicacion(){
        return $this->belongsTo(Ubicacion::class, 'ubicacion_id', 'ubicacion_id');
    }
}
