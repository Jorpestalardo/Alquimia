<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\Eventos;
use App\Models\Ubicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventosController extends Controller
{
    public function allEventos()
    {
        $usuario = Auth::user();

        $eventos = Eventos::All();
        return view('eventos/consumidor/eventos', [
            'eventos' => $eventos,
        ]);
    }

    public function findById(int $id)
    {
        $evento = Eventos::findOrFail($id);
        return view('eventos/consumidor/eventoDetalle', [
            'evento' => $evento,
        ]);
    }
    //Donador: 
    public function allEventosDonador()
    {
        $usuario = Auth::user();

        $eventos = Eventos::All();
        return view('eventos/donador/eventos', [
            'eventos' => $eventos,
        ]);
    }

    public function findByIdDonador(int $id)
    {
        $evento = Eventos::findOrFail($id);
        return view('eventos/donador/eventoDetalle', [
            'evento' => $evento,
        ]);
    }

    public function findByIdDonadorEventos(int $id)
    {
        $evento = Eventos::findOrFail($id);
        return view('eventos/donador/misEventoDetalle', [
            'evento' => $evento,
        ]);
    }
}