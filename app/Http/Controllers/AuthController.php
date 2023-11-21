<?php

namespace App\Http\Controllers;


use App\Models\Roles;
use App\Models\Ubicacion;
use App\Models\Usuarios;
use App\Models\Avatar;
use App\Models\City;
use App\Models\Province;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class AuthController extends Controller
{
    //Login: 
    public function login()
    {
        return view('auth.login');
    }

    public function admin()
    {
        return view('admin.index');
    }

    public function consumidor()
    {
        return view('consumidor.index');
    }

    public function donador()
    {
        return view('donador.index');
    }

    public function mostrarPerfil($id)
    {
        $usuario = Usuarios::findOrFail($id);

        return view('perfilUsuario', [
            'usuario' => $usuario
        ]);
    }

    public function loginAction(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        $request->validate(Usuarios::validationRules(), Usuarios::validationMessages());

        if (!auth()->attempt($credentials)) {
            return back()->with('message.error', 'Las credenciales ingresadas no coinciden con nuestros registros.Inténtelo de nuevo ');
        }

        $request->session()->regenerate();

        $user = auth()->user();

        if ($user->roles_id == 1) {
            return redirect()->route('admin.index');
        } else if ($user->roles_id == 2) {
            return redirect()->route('consumidor.index');
        } else {
            return redirect()->route('donador.index');
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login')->with('message.success', '<ion-icon name="happy-outline" class="fs-3"></ion-icon> Se cerró sesión correctamente. ¡Esperamos que vuelvas pronto!');
    }

    public function register()
    {
        $roles = Roles::all();
        $ubicaciones = Ubicacion::all();
        $avatares = Avatar::all();
        $provinces = Province::all();
        $cities = City::orderBy('name')->get();

        return view('auth.register', compact('roles', 'ubicaciones', 'avatares', 'provinces', 'cities'));
    }

    public function registerAction(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('usuarios')->ignore(optional(auth()->user())->usuario_id, 'usuario_id'),
            ],
            'password' => 'required',
            'roles_id' => 'required',
        ], [
            'email.unique' => 'El correo electrónico ya está registrado',
        ]);

        $provinceId = $request->input('province_id');
        $cityId = $request->input('city_id');

        $ubicacion = new Ubicacion([
            'province_id' => $provinceId,
            'city_id' => $cityId,
        ]);

        $ubicacion->save(); // Guardar la ubicación en la tabla 'ubicacion'

        $usuario = Usuarios::create([
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'roles_id' => $request->input('roles_id'),
            'ubicacion_id' => $ubicacion->ubicacion_id,
            'numero_celular' => $request->input('numero_celular'),
            'avatar_id' => $request->input('avatar_id'),
        ]);

        auth()->login($usuario);

        $user = auth()->user();

        if ($user->roles_id == 1) {
            return redirect()->route('admin.index');
        } else if ($user->roles_id == 2) {
            return redirect()->route('consumidor.index');
        } else {
            return redirect()->route('donador.index');
        }
    }
}