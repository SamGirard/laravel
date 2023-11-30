<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usager;
use App\Http\Requests\UsagerRequest;
use Illuminate\Support\Facades\Log;


class UsagersController extends Controller
{
    public function create()
    {
        return View('Netflix.createUsager');
    }

    public function store(UsagerRequest $request)
    {
        try {
            $usager = new Usager($request->all());

            $uploadFile = $request->file('profil');
            $nomFichierUnique = '../images/profils/' . str_replace(' ', '-',$usager->nom). '-' . uniqid() . '.' . $uploadFile->extension();
            try{
                $request->profil->move(public_path('images/profils'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }

            $usager->profil = $nomFichierUnique;
            $usager->save();
        } catch (\Throwable $e) {
            Log::debug($e);
        }

        return redirect()->route('Netflix.index')->with('success', 'Compte créer!');;
    }



    public function edit(Usager $usager)
    {
        return View('Netflix.modifierUsagers', compact('usager'));
    }



    public function update(UsagerRequest $request, Usager $usager)
    {
        try {
            $usager->update($request->all());

            $uploadFile = $request->file('profil');
            $nomFichierUnique = '../images/profils/' . str_replace(' ', '-',$usager->nom). '-' . uniqid() . '.' . $uploadFile->extension();
            try{
                $request->profil->move(public_path('images/profils'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }

            $usager->profil = $nomFichierUnique;
            $usager->save();
        } catch (\Throwable $e) {
            Log::debug($e);
        }

        return redirect()->route('Netflix.index')->with('success', 'Modification confirmé!');
    }

    public function destroy($id)
    {
        try{
            $usager = Usager::findOrFail($id);

            $usager->delete();
            return redirect()->route('Netflix.index')->with('message', "Suppression de ".$usager->nom." réussi!");
        }
        catch(\Throwable $e){
            log::debug($e);
            return redirect()->route('Netflix.index')->withErrors(['la suppression du film '.$usager->nom.' a échoué']);
        }
        return redirect()->route('Netflix.index')->with('success', 'Suppression confirmé!');;
    }



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





    public function showRegisterForm()
    {
        return View('Netflix.register');
    }
}

