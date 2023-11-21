<?php

namespace App\Http\Controllers;

use App\Models\Donaciones;
use App\Models\Roles;
use App\Models\Ubicacion;
use App\Models\Usuarios;
use App\Models\Tipo;
use App\Models\City;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DonacionController extends Controller
{
    public function allDonaciones(Request $request)
    {
        $user = auth()->user();

        if ($user->roles_id == 2) {
            $province_id = $user->ubicacion->province_id;

            // Obtener los tipos de material disponibles
            $tipos = Tipo::pluck('tipo', 'tipo_id');

            // Obtener los departamentos únicos según la provincia del usuario
            $departments = City::where('province_id', $province_id)
                ->groupBy('department')
                ->pluck('department');

            // Obtener el tipo de material seleccionado (si se proporcionó en el formulario)
            $selectedTipo = $request->input('tipo_id');

            // Obtener el departamento seleccionado (si se proporcionó en el formulario)
            $selectedDepartment = $request->input('department');

            // Filtrar las donaciones según el tipo de material seleccionado, si se proporcionó
            $donacionesQuery = Donaciones::whereHas('ubicacion', function ($query) use ($province_id) {
                $query->where('province_id', $province_id);
            });

            if (!empty($selectedTipo)) {
                $donacionesQuery->where('tipo_id', $selectedTipo);
            }

            // Si se proporcionó un departamento válido, filtrar las donaciones por ese departamento
            if (!empty($selectedDepartment)) {
                $donacionesQuery->whereHas('ubicacion.city', function ($query) use ($selectedDepartment) {
                    $query->where('department', $selectedDepartment);
                });
            }

            $donaciones = $donacionesQuery->get();

            return view('consumidor.donaciones', [
                'donaciones' => $donaciones,
                'tipos' => $tipos,
                'departments' => $departments,
                // Pasar los departamentos disponibles a la vista
                'selectedTipo' => $selectedTipo,
                // Pasar el tipo seleccionado a la vista
                'selectedDepartment' => $selectedDepartment, // Pasar el departamento seleccionado a la vista
            ]);
        }
    }

    public function findById(int $id)
    {
        $user = auth()->user();
        $formattedDate = Carbon::now()->format('d-m-Y');

        if ($user->roles_id == 2) {
            $donacion = Donaciones::findOrFail($id);

            return view('consumidor/donacionesDetalle', [
                'donacion' => $donacion,
                'formattedDate' => $formattedDate,
            ]);
        }
    }
}