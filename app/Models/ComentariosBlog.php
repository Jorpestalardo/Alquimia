<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentariosBlog extends Model
{
    protected $primaryKey = 'comentarioblog_id';

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'usuario_id', 'usuario_id');
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id', 'blog_id');
    }

}
