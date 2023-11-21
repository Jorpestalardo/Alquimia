<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\Eventos;
use App\Models\ComentariosEventos;



class ComentariosEventosController extends Controller
{
    public function allComentarios(int $id)
    {
        $evento = Eventos::findOrFail($id);
        $comentarios_eventos = ComentariosEventos::where('eventos_id', $id)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('eventos/consumidor/eventoDetalle', [
            'comentarios_eventos' => $comentarios_eventos,
            'evento' => $evento,
        ]);
    }

    public function allComentariosDonante(int $id)
    {
        $evento = Eventos::findOrFail($id);
        $comentarios_eventos = ComentariosEventos::where('eventos_id', $id)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('eventos/donador/eventoDetalle', [
            'comentarios_eventos' => $comentarios_eventos,
            'evento' => $evento,
        ]);
    }

    public function comentarioEvento(Request $request, $id)
    {
        $request->validate([
            'mensaje' => 'required',
        ]);

        $evento = Eventos::findOrFail($id);

        $comentario = new ComentariosEventos();
        $comentario->mensaje = $request->mensaje;
        $comentario->eventos_id = $evento->eventos_id;
        $comentario->usuario_id = auth()->user()->usuario_id; // Asigna el usuario actualmente autenticado
        $comentario->save();

        return redirect()->back()->with('message.success', '<ion-icon name="happy-outline" class="fs-3"></ion-icon> ¡El comentario se agregó con éxito');
    }
}