<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Donaciones;
use App\Models\Ubicacion;
use App\Models\Tipo;
use App\Models\City;
use App\Models\Province;
use App\Models\Usuarios;
use App\Models\Eventos;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class DonadorController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();

        if ($user->roles_id == 3) {
            $donaciones = Donaciones::where('usuario_id', $user->usuario_id)->get();

            return view('donador.dashboard', [
                'donaciones' => $donaciones,
            ]);
        } else {
            return view('auth.login');
        }
    }

    public function reciclajeDetalle(int $id)
    {
        $user = auth()->user();
        $formattedDate = Carbon::now()->format('d-m-Y');

        if ($user->roles_id == 3) {
            $donacion = Donaciones::findOrFail($id);

            return view('donador/reciclajeDetalle', [
                'donacion' => $donacion,
                'formattedDate' => $formattedDate,
            ]);
        }
    }

    public function formElemento()
    {

        return view('donador.formElemento', [
            'ubicacion' => Ubicacion::all(),
            'tipo' => Tipo::all(),
            'provinces' => Province::all(),
            'cities' => City::orderBy('name')->get(),
        ]);
    }

    public function nuevoElemento(Request $request)
    {
        $data = $request->except('_token');
        $data['usuario_id'] = Auth::id();

        // Obtener el province_id y city_id del formulario
        $provinceId = $request->input('province_id');
        $cityId = $request->input('city_id');

        // Validar que el province_id y city_id sean numéricos
        $request->validate([
            'province_id' => 'required|numeric',
            'city_id' => 'required|numeric',
        ], [
            'province_id.required' => 'Debes seleccionar una provincia.',
            'province_id.numeric' => 'El ID de la provincia debe ser un número.',
            'city_id.required' => 'Debes seleccionar una ciudad.',
            'city_id.numeric' => 'El ID de la ciudad debe ser un número.',
        ]);

        // Verificar si el registro de ubicación ya existe
        $ubicacion = Ubicacion::where('province_id', $provinceId)->where('city_id', $cityId)->first();

        // Si no existe, crear un nuevo registro de ubicación
        if (!$ubicacion) {
            $ubicacion = Ubicacion::create([
                'province_id' => $provinceId,
                'city_id' => $cityId,
            ]);
        }

        // Asignar el ubicacion_id a la donación
        $data['ubicacion_id'] = $ubicacion->ubicacion_id;

        $request->validate(Donaciones::validationRules(), Donaciones::validationMessages());

        if ($request->hasFile('img')) {
            $data['img'] = $this->uploadImg($request);
        }

        $donaciones = Donaciones::create($data);

        if (!$donaciones) {
            return redirect()->back()->with('message.error', '<ion-icon name="sad-outline" class="fs-3"></ion-icon> Hubo un problema al publicar la donación. Inténtalo de nuevo.');
        }

        return redirect()->route('donador.dashboard')->with('message.success', '<ion-icon name="happy-outline" class="fs-3"></ion-icon> ¡El Elemento <b>' . e($data['titulo']) . '</b> se publicó con éxito!');
    }

    public function borrar(int $id)
    {
        $formattedDate = Carbon::now()->format('d-m-Y');

        return view('donador.borrar', [
            'donacion' => Donaciones::findOrFail($id),
            'formattedDate' => $formattedDate
        ]);
    }

    public function borrarDonacion(int $id)
    {
        $donacion = Donaciones::findOrFail($id);

        $donacion->delete();

        return redirect()->route('donador.dashboard')->with('message.success', '<ion-icon name="happy-outline" class="fs-3"></ion-icon> ¡La donacion <b>' . e($donacion->tituloevento) . '</b> se eliminó con éxito!');
    }

    public function editar(int $id)
    {
        return view('donador.editar', [
            'donacion' => Donaciones::findOrFail($id),
            'tipo' => Tipo::all(),
            'ubicacion' => Ubicacion::all(),
            'provinces' => Province::all(),
            'cities' => City::orderBy('name')->get(),
        ]);
    }

    public function editarDonacion(Request $request, int $id)
    {
        $donacion = Donaciones::findOrFail($id);

        $request->validate(Donaciones::validationRules(), Donaciones::validationMessages());

        $data = $request->except(['_token']);

        // Obtener el province_id y city_id del formulario
        $provinceId = $request->input('province_id');
        $cityId = $request->input('city_id');

        // Verificar si el registro de ubicación ya existe
        $ubicacion = Ubicacion::where('province_id', $provinceId)->where('city_id', $cityId)->first();

        // Si no existe, crear un nuevo registro de ubicación
        if (!$ubicacion) {
            $ubicacion = Ubicacion::create([
                'province_id' => $provinceId,
                'city_id' => $cityId,
            ]);
        }

        // Asignar el ubicacion_id a la donación
        $data['ubicacion_id'] = $ubicacion->ubicacion_id;

        $oldImg = $donacion->img;

        if ($request->hasFile('img')) {
            $data['img'] = $this->uploadImg($request);
        }

        $donacion->update($data);

        if ($request->hasFile('img') && Storage::exists('img/' . $oldImg)) {
            Storage::delete('img/' . $oldImg);
        }

        return redirect()->route('donador.dashboard')->with('message.sucess', '<ion-icon name="happy-outline" class="fs-3"></ion-icon> ¡La donación <b>' . e($data['titulo']) . '</b> se editó con éxito!');
    }

    protected function uploadImg(Request $request): string
    {
        $img = $request->file('img');
        $titulo = $request->input('titulo');

        $imgName = date('YmdHis_') . \Str::slug($request->input('titulo')) . "." . $img->guessExtension();

        $img->storeAs('public/img', $imgName);

        return $imgName;
    }

    protected function deleteImg(?string $file): void
    {
        if ($file !== null && Storage::disk('public')->has('img/' . $file)) {
            Storage::disk('public')->delete('img/' . $file);
        }
    }

    public function allMisEventos()
    {
        $user = auth()->user();

        if ($user->roles_id == 3) {
            $eventos = Eventos::where('usuario_id', $user->usuario_id)->get();

            return view('eventos.donador.misEventos', [
                'eventos' => $eventos,
            ]);
        }
    }

    public function formNewEvento()
    {
        $ubicaciones = Ubicacion::all();
        $usuario = Auth::user();

        return view('eventos.donador.formNewEvento', [
            'ubicaciones' => $ubicaciones,
            'usuario' => $usuario,
            'provinces' => Province::all(),
            'cities' => City::orderBy('name')->get(),
        ]);
    }

    public function runNewEvento(Request $request)
    {
        $data = $request->except('_token');
        $data['usuario_id'] = Auth::id();

        // Obtener el province_id y city_id del formulario
        $provinceId = $request->input('province_id');
        $cityId = $request->input('city_id');

        // Validar que el province_id y city_id sean numéricos
        $request->validate([
            'province_id' => 'required|numeric',
            'city_id' => 'required|numeric',
        ], [
            'province_id.required' => 'Debes seleccionar una provincia.',
            'province_id.numeric' => 'El ID de la provincia debe ser un número.',
            'city_id.required' => 'Debes seleccionar una ciudad.',
            'city_id.numeric' => 'El ID de la ciudad debe ser un número.',
        ]);

        // Verificar si el registro de ubicación ya existe
        $ubicacion = Ubicacion::where('province_id', $provinceId)->where('city_id', $cityId)->first();

        // Si no existe, crear un nuevo registro de ubicación
        if (!$ubicacion) {
            $ubicacion = Ubicacion::create([
                'province_id' => $provinceId,
                'city_id' => $cityId,
            ]);
        }

        // Asignar el ubicacion_id a la donación
        $data['ubicacion_id'] = $ubicacion->ubicacion_id;

        $request->validate(Eventos::validationRules(), Eventos::validationMessages());

        if ($request->hasFile('img')) {
            $data['img'] = $this->uploadImgEvento($request);
        }

        $eventos = Eventos::create($data);

        if (!$eventos) {
            return redirect()->back()->with('message.error', '<ion-icon name="sad-outline" class="fs-3"></ion-icon> Hubo un problema al publicar la donación. Inténtalo de nuevo.');
        }

        return redirect()->route('eventos.donador.misEventos', ['id' => $data['usuario_id']])->with('message.success', '<ion-icon name="happy-outline" class="fs-3"></ion-icon> ¡El Elemento <b>' . e($data['titulo']) . '</b> se publicó con éxito!');
    }

    protected function uploadImgEvento(Request $request): string
    {
        $img = $request->file('img');
        $titulo = $request->input('titulo');

        $imgName = date('YmdHis_') . \Str::slug($request->input('titulo')) . "." . $img->guessExtension();

        $img->storeAs('public/img', $imgName);

        return $imgName;
    }

    protected function deleteImgEvento(?string $file): void
    {
        if ($file !== null && Storage::disk('public')->has('img/' . $file)) {
            Storage::disk('public')->delete('img/' . $file);
        }
    }

    public function editarEvento(int $id)
    {
        return view('eventos.donador.editar', [
            'evento' => Eventos::findOrFail($id),
            'ubicacion' => Ubicacion::all(),
            'provinces' => Province::all(),
            'cities' => City::orderBy('name')->get(),
        ]);
    }

    public function editarEventoAcc(Request $request, int $id)
    {
        $evento = Eventos::findOrFail($id);

        $request->validate(Eventos::validationRules(), Eventos::validationMessages());

        $data = $request->except(['_token']);

        // Obtener el province_id y city_id del formulario
        $provinceId = $request->input('province_id');
        $cityId = $request->input('city_id');

        // Verificar si el registro de ubicación ya existe
        $ubicacion = Ubicacion::where('province_id', $provinceId)->where('city_id', $cityId)->first();

        // Si no existe, crear un nuevo registro de ubicación
        if (!$ubicacion) {
            $ubicacion = Ubicacion::create([
                'province_id' => $provinceId,
                'city_id' => $cityId,
            ]);
        }

        // Asignar el ubicacion_id a la donación
        $data['ubicacion_id'] = $ubicacion->ubicacion_id;

        $oldImg = $evento->img;

        if ($request->hasFile('img')) {
            $data['img'] = $this->uploadImgEvento($request);
        }

        $evento->update($data);

        if ($request->hasFile('img') && Storage::exists('public/img' . $oldImg)) {
            Storage::delete('public/img' . $oldImg);
        }

        return redirect()->route('eventos.donador.misEventos')->with('message.sucess', '<ion-icon name="happy-outline" class="fs-3"></ion-icon> ¡El evento <b>' . e($data['titulo']) . '</b> se editó con éxito!');
    }

    public function borrarEvento(int $id)
    {
        return view('eventos.donador.borrar', [
            'evento' => Eventos::findOrFail($id)
        ]);
    }

    public function borrarEventoAcc(int $id)
    {
        $evento = Eventos::findOrFail($id);

        $evento->delete();

        return redirect()->route('eventos.donador.misEventos')->with('message.success', '<ion-icon name="happy-outline" class="fs-3"></ion-icon> ¡El evento <b>' . e($evento->titulo) . '</b> se eliminó con éxito!');
    }

    public function estadoDonacion($id)
    {
        $formattedDate = Carbon::now()->format('d-m-Y');

        $donacion = Donaciones::findOrFail($id);
        return view('donador.elementoDonado', [
            'donacion' => $donacion,
            'formattedDate' => $formattedDate,
        ]);
    }

    public function estadoDonacionAction($id)
    {
        $donacion = Donaciones::findOrFail($id); // Asegurarte de cambiar "Donacion" por el modelo correcto de tu donación
        $donacion->envio = true; // Cambiar el estado de envío a verdadero
        $donacion->save();

        return redirect()->route('donador.dashboard')->with('message.success', '<ion-icon name="happy-outline" class="fs-3"></ion-icon> ¡Gracias por donar y cambiar el mundo!');
    }
}