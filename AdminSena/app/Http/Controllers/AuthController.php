<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // ==========================================
    // MOSTRAR LOGIN
    // ==========================================
    public function showLogin()
    {
        return view('auth.login');
    }


    // ==========================================
    // INICIAR SESIÓN
    // ==========================================
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Ingrese un correo electrónico válido.',
            'password.required' => 'La contraseña es obligatoria.',
        ]);


        if (Auth::attempt(
            $credentials,
            $request->boolean('remember')
        )) {

            $request->session()->regenerate();

            return redirect()
                ->intended('/')
                ->with(
                    'success',
                    'Bienvenido al sistema.'
                );
        }


        return back()
            ->withErrors([
                'email' =>
                    'El correo electrónico o la contraseña son incorrectos.',
            ])
            ->withInput(
                $request->only('email')
            );
    }


    // ==========================================
    // MOSTRAR REGISTRO
    // ==========================================
    public function showRegister()
    {
        return view('auth.register');
    }


    // ==========================================
    // REGISTRAR USUARIO
    // ==========================================
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' =>
                'required|string|max:255',

            'email' =>
                'required|email|max:255|unique:users,email',

            'password' =>
                'required|string|min:8|confirmed',
        ], [
            'name.required' =>
                'El nombre es obligatorio.',

            'email.required' =>
                'El correo electrónico es obligatorio.',

            'email.email' =>
                'Ingrese un correo electrónico válido.',

            'email.unique' =>
                'Este correo ya está registrado.',

            'password.required' =>
                'La contraseña es obligatoria.',

            'password.min' =>
                'La contraseña debe tener mínimo 8 caracteres.',

            'password.confirmed' =>
                'Las contraseñas no coinciden.',
        ]);


        $user = User::create([
            'name' =>
                $data['name'],

            'email' =>
                $data['email'],

            'password' =>
                $data['password'],
        ]);


        Auth::login($user);

        $request->session()->regenerate();


        return redirect()
            ->route('home')
            ->with(
                'success',
                'Cuenta creada correctamente. Bienvenido.'
            );
    }


    // ==========================================
    // CERRAR SESIÓN
    // ==========================================
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->with(
                'success',
                'Sesión cerrada correctamente.'
            );
    }
}
