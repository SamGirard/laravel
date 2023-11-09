<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acteur;
use App\Http\Requests\ActeurRequest;
use Illuminate\Support\Facades\Log;

class ActeursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $acteurs = Acteur::all();
        return View('Netflix.acteur', compact('acteurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('Netflix.createActeurs');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ActeurRequest $request)
    {
        try {
            $acteur = new Acteur($request->all());
            $acteur->save();
        } catch (\Throwable $e) {
            Log::debug($e);
        }

        return redirect()->route('Netflix.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Acteur $acteur)
    {
        return View('Netflix.zoomActeur', compact('acteur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Acteur $acteur)
    {
        return View('Netflix.modifierActeur', compact('acteur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActeurRequest $request, Acteur $acteur)
    {
        try {
            $acteur->update($request->all());
        } catch (\Throwable $e) {
            Log::debug($e);
        }

        return redirect()->route('Netflix.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $acteur = Acteur::findOrFail($id);

            $filmsJoues = $acteur->filmsJoues()->get();
            foreach ($filmsJoues as $filmJoue){
                $filmJoue->acteur_id = 999;
                $filmJoue->save();
            }

            $acteur->delete();
            return redirect()->route('Netflix.acteur')->with('message', "Suppression de ".$acteur->titre." réussi!");
        }
        catch(\Throwable $e){
            log::debug($e);
            return redirect()->route('Netflix.acteur')->withErrors(['la suppression du film '.$acteur->titre.' a échoué']);
        }
        return redirect()->route('Netflix.acteur');
    }
}
