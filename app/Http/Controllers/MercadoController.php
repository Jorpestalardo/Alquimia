<?php

namespace App\Http\Controllers;

use App\Models\Articulos;
use App\Models\Compras;
use App\Models\Mercado;
use App\Models\Ubicacion;
use App\Models\Usuarios;
use App\Models\Province;
use App\Models\City;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class MercadoController extends Controller
{
    public function verTodos(Request $request)
    {
        $user = auth()->user();

        $province_id = $user->ubicacion->province_id;

        $usuario = Auth::user();

        // Obtener los departamentos únicos según la provincia del usuario
        $departments = City::where('province_id', $province_id)
            ->groupBy('department')
            ->pluck('department');

        // Obtener el departamento seleccionado (si se proporcionó en el formulario)
        $selectedDepartment = $request->input('department');

        // Filtrar las donaciones según el tipo de material seleccionado, si se proporcionó
        $mercadoQuery = Mercado::whereHas('ubicacion', function ($query) use ($province_id) {
            $query->where('province_id', $province_id);
        });

        // Si se proporcionó un departamento válido, filtrar las donaciones por ese departamento
        if (!empty($selectedDepartment)) {
            $mercadoQuery->whereHas('ubicacion.city', function ($query) use ($selectedDepartment) {
                $query->where('department', $selectedDepartment);
            });
        }

        $articulos = $mercadoQuery->get();
        $mercado = Mercado::all();

        return view('mercado/index', [
            'articulos' => $articulos,
            'mercado' => $mercado,
            'usuario' => $usuario,
            'departments' => $departments,
            'selectedDepartment' => $selectedDepartment, // Pasar el departamento seleccionado a la vista

        ]);
    }

    public function findById(int $id)
    {
        $mercado = Mercado::with('usuario')->findOrFail($id);
        return view('mercado.mercadoDetalle', [
            'mercado' => $mercado,
        ]);
    }

    public function formNewMercado()
    {
        $ubicaciones = Ubicacion::all();
        $usuario = Auth::user();

        return view('mercado.formNewMercado', [
            'ubicaciones' => $ubicaciones,
            'usuario' => $usuario,
            'provinces' => Province::all(),
            'cities' => City::orderBy('name')->get(),
        ]);
    }

    public function runNewMercado(Request $request)
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

        $request->validate(Mercado::validationRules(), Mercado::validationMessages());

        if ($request->hasFile('foto')) {
            $data['foto'] = $this->uploadImg($request);
        }

        $mercado = Mercado::create($data);

        if (!$mercado) {
            return redirect()->back()->with('message.error', '<ion-icon name="sad-outline" class="fs-3"></ion-icon> Hubo un problema al publicar el producto. Inténtalo de nuevo.');
        }

        $articulo = new Articulos();
        $articulo->usuario_id = $data['usuario_id'];
        $articulo->mercado_id = $mercado->mercado_id;
        $articulo->save();

        return redirect()->route('mercado.userProducts', ['id' => $data['usuario_id']])->with('message.success', '¡El producto <b>' . e($data['titulo']) . '</b> se publicó con éxito!');
    }

    public function allProducts($id)
    {
        $usuario = Usuarios::findOrFail($id);
        $articulos = Articulos::where('usuario_id', $usuario->usuario_id)->get();

        return view('mercado.userProducts', [
            'usuario' => $usuario,
            'articulos' => $articulos,
        ]);
    }

    public function deleteProduct(int $id)
    {
        return view('mercado.eliminarProduct', [
            'mercado' => Mercado::findOrFail($id),
            'ubicaciones' => Ubicacion::All(),
        ]);
    }

    public function deleteProductAction(int $id)
    {
        $mercado = Mercado::findOrFail($id);

        $data['usuario_id'] = Auth::id();
        // Eliminar los registros relacionados en la tabla "articulos"
        $mercado->articulos()->delete();

        // Eliminar el registro en la tabla "mercado"
        $mercado->delete();

        return redirect()->route('mercado.userProducts', ['id' => $data['usuario_id']])->with('message.success', '¡El producto se eliminó con éxito!');
    }

    public function editProduct(int $id)
    {
        return view('mercado.editarProduct', [
            'mercado' => Mercado::findOrFail($id),
            'ubicaciones' => Ubicacion::All(),
            'provinces' => Province::all(),
            'cities' => City::orderBy('name')->get(),
        ]);
    }

    public function editProductAction(Request $request, int $id)
    {
        $mercado = Mercado::findOrFail($id);

        $request->validate(Mercado::validationRules(), Mercado::validationMessages());

        $data = $request->except(['_token']);
        $data['usuario_id'] = Auth::id();

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

        $oldImg = $mercado->foto;

        if ($request->hasFile('foto')) {
            $data['foto'] = $this->uploadImg($request);
        }

        $mercado->update($data);
        $mercado->ubicacion_id = $data['ubicacion_id'];
        $mercado->save();

        if ($request->hasFile('foto') && Storage::exists('img/' . $oldImg)) {
            Storage::delete('img/' . $oldImg);
        }

        return redirect()->route('mercado.userProducts', ['id' => $data['usuario_id']])->with('message.success', '¡El producto <b>' . e($data['titulo']) . '</b> se editó con éxito!');
    }

    public function ventaEstado(int $id)
    {
        $mercado = Mercado::findOrFail($id);

        return view('mercado.vendido', [
            'mercado' => $mercado,
        ]);
    }

    public function ventaEstadoAction(Request $request, int $id)
    {
        $mercado = Mercado::findOrFail($id);
        $data['usuario_id'] = Auth::id();

        $mercado->envio = true;

        $mercado->save();

        return redirect()->route('mercado.userProducts', ['id' => $data['usuario_id']])->with('message.success', '<ion-icon name="happy-outline" class="fs-3"></ion-icon>¡El producto se ha marcado como vendido éxitosamente!');
    }

    public function allCompras($id)
    {
        $usuario = Usuarios::findOrFail($id);
        $compras = Compras::where('usuario_id', $usuario->usuario_id)->get();

        return view('mercado.compras.userCompras', [
            'usuario' => $usuario,
            'compras' => $compras,
        ]);
    }

    public function userComprasDetail($id)
    {
        $compra = Compras::findOrFail($id);

        return view('mercado.compras.userComprasDetail', [
            'compra' => $compra,
        ]);
    }

    public function deleteCompra(int $id)
    {
        $compra = Compras::findOrFail($id);

        return view('mercado.compras.deleteCompra', [
            'compra' => $compra,
        ]);
    }

    public function deleteCompraAction(int $id)
    {
        $compra = Compras::findOrFail($id);

        // Eliminar el registro en la tabla "mercado"
        $compra->delete();
        // route('mercado.userProducts', ['id' => $data['usuario_id']])

        return redirect()->route('mercado.compras.userCompras', ['id' => $compra->usuario->usuario_id])->with('message.success', '<ion-icon name="happy-outline" class="fs-3"></ion-icon> ¡El producto <b>' . e($compra->mercado->titulo) . '</b> se eliminó con éxito!');
    }

    protected function uploadImg(Request $request): string
    {
        $img = $request->file('foto');
        $titulo = $request->input('titulo');

        $imgName = date('YmdHis_') . \Str::slug($request->input('titulo')) . "." . $img->guessExtension();

        $img->storeAs('public/img', $imgName);

        return $imgName;
    }
}