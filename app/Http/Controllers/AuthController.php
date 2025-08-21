<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthLoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function loginProcess(AuthLoginRequest $request)
    {
        try {
            $credentials = [
                'email' => $request->email,
                'password' => $request->password
            ];

            if (Auth::attempt($credentials)) {
                return redirect()->route('transactions.index')->with('success', 'Login realizado com sucesso!');
            }

            // Caso as credenciais não batam
            return back()->withInput()->with('error', 'E-mail ou senha inválidos!');

        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'E-mail ou senha inválidos!');
        }
    }
}