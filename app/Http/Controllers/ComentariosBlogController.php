<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\Blog;
use App\Models\ComentariosBlog;

class ComentariosBlogController extends Controller
{
    public function allComentarios(int $id)
    {
        $blog = Blog::findOrFail($id);
        $comentarios_blogs = ComentariosBlog::where('blog_id', $id)
            ->orderBy('created_at', 'desc')
            ->get();

        $formattedDate = Carbon::now()->format('d-m-Y');
        
        return view('blog.detalle', [
            'comentarios_blogs' => $comentarios_blogs,
            'blog' => $blog,
            'formattedDate' => $formattedDate,
        ]);
    }

    public function comentarioBlog(Request $request, $id)
    {
        $request->validate([
            'mensaje' => 'required',
        ]);

        $blog = Blog::findOrFail($id);

        $comentario = new ComentariosBlog();
        $comentario->mensaje = $request->mensaje;
        $comentario->blog_id = $blog->blog_id;
        $comentario->usuario_id = auth()->user()->usuario_id; // Asigna el usuario actualmente autenticado
        $comentario->save();

        return redirect()->back()->with('message.success', '<ion-icon name="happy-outline" class="fs-3"></ion-icon> ¡El comentario se agrego con éxito');
    }
}