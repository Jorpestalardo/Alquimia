<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Tipo
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Tipo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tipo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tipo query()
 * @mixin \Eloquent
 */


class Tipo extends Model
{
    protected $table = 'tipo';
    protected $primaryKey = 'tipo_id';
}
