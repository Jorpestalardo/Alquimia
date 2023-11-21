<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EmpresasController extends Controller
{
    public function AllEmpresas()
    {
        $empresas = Empresas::All();
        return view('empresas/empresas', [
            'empresas' => $empresas,
        ]);
    }

    public function findById(int $id)
    {
        $empresa = Empresas::findOrFail($id);
        return view('empresas/empresasDetalle', [
            'empresa' => $empresa,
        ]);
    }
}