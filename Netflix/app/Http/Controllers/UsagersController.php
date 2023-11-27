<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsagersController extends Controller
{
    public function login(Request $request)
    {
        $reussi = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if(!$reussi){
            $reussi = Auth::attempt(['username' => $request->email, 'password' => $request->password]);
        }

        if($reussi){
            return redirect()->route('chooseUser')->with('message', "Connexion réussie");
        } else {
            return redirect()->route('login')->withErrors(['Informations invalides']);
        }
    }

    public function showLoginForm()
    {
        return View('Netflix.login');
    }

    public function logout()
    {
        return View('Netflix.login');
    }

    public function choose()
    {
        return View('Netflix.usagerSelect');
    }

}

