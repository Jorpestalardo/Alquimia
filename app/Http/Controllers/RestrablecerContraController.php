<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;

class RestrablecerContraController extends Controller
{
    public function showResetForm($code)
    {
        $user = Usuarios::where('recovery_code_expires_at', '>=', now())
            ->where('recovery_code', $code)
            ->first();

        // dd($code);
        // dd($user); // Esto mostrará los datos del usuario o null si no se encuentra
    
        if (!$user) {
            return redirect()->route('auth.login')
                ->with('message.error', 'Código de recuperación inválido o expirado.');
        }
    
        return (view('auth.reset-password', compact('code')));
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'recoveryCode' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = Usuarios::where('recovery_code_expires_at', '>=', now())
            ->where('recovery_code', $request->recoveryCode)
            ->first();

        if (!$user) {
            return redirect()->route('password.reset')
                ->with('message.error', 'Código de recuperación inválido o expirado.');
        }
    
        $user->password = Hash::make($request->password);
        $user->recovery_code = null;
        $user->recovery_code_expires_at = null;
        $user->save();

        return redirect()->route('auth.login')
            ->with('message.success', 'Tu contraseña ha sido actualizada. Ahora puedes iniciar sesión.');
    }
}