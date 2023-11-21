<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\Ubicacion;
use App\Models\Avatar;
use App\Models\UsuarioPerfil;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UsuarioController extends Controller
{
    public function perfil()
    {
        $usuario = Auth::user();
        $roles = Roles::all();
        $ubicacion = Ubicacion::all();
        $avatar = Avatar::all();

        return view('usuarios.perfil', [
            'usuario' => $usuario,
            'roles' => $roles,
            'ubicacion' => $ubicacion,
            'avatar' => $avatar,
        ]);
    }

    public function editarPerfil(int $id)
    {
        return view('usuarios.editarPerfil', [
            'usuario' => UsuarioPerfil::findOrFail($id),
            'avatares' => Avatar::all(),
        ]);
    }

    public function editarPerfilAction(Request $request, int $id)
    {
        $usuario = UsuarioPerfil::findOrFail($id);

        $request->validate(UsuarioPerfil::validationRules(), UsuarioPerfil::validationRulesAlerts());

        $data = $request->except(['_token']);

        try {
            DB::transaction(function () use ($usuario, $data) {
                $usuario->update($data);
            });
        } catch (\Exception $e) {
            return redirect()->route('usuarios.perfil')->with('message.danger', '<ion-icon name="sad-outline" class="fs-3"></ion-icon> <b>' . e($data['nombre']) . '</b> no pudo editarse correctamente. Inténtelo más tarde');
        }

        return redirect()->route('usuarios.perfil')->with('message.success', '<ion-icon name="happy-outline" class="fs-3"></ion-icon> ¡<b>' . e($data['nombre']) . '</b> se editó con éxito tu perfil!');
    }
}