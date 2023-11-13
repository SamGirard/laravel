<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsagersController extends Controller
{
    public function login(Request $request)
    {
        $reussi = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if($reussi){
            return redirect()->route('Netflix.index') ->with('message', 'Connexion réussie');
        } else {
            return redirect()->route('login')->withErrors(['Informations invalides']);
        }
    }

    public function showLoginForm()
    {
        return View('Netflix.login');
    }

}

