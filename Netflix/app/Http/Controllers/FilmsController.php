<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Personne;
use App\Models\Acteur;
use App\Http\Requests\FilmRequest;
use Illuminate\Support\Facades\Log;


class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autres = Film::where('categorie', '=', 'Autres')->get();
        $siecles = Film::where('annee', '<=', 2000)->get();
        $tarantinos = Film::where('realisateur_id', '=', '10')->get();
        $revoirs = Film::where('categorie', '=', 'À revoir')->get();
        $tendances = Film::where('categorie', '=', 'tendance')->get();
        $classics = Film::where('categorie', '=', 'classique')->get();
        $films = Film::all();
        return View('Netflix.netflix', compact('films', 'classics', 'tendances', 'revoirs', 'tarantinos', 'siecles', 'autres'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $realisateurs = Personne::pluck('nom', 'id');
        $producteurs = Personne::pluck('nom', 'id');
        $acteurs = Acteur::pluck('nom', 'id');
        return View('Netflix.createFilm', compact('realisateurs', 'producteurs', 'acteurs'));
    }

    /*
     * Store a newly created resource in storage.
     */
    public function store(FilmRequest $request)
    {
        try {
            $film = new Film($request->all());
            $film->save();
        } catch (\Throwable $e) {
            Log::debug($e);
        }


        return redirect()->route('Netflix.index');
    }


    public function storeRealisateurFilm(Request $request)
    {
        try{
        $realisateur = Personne::find($request->id);
        $film = Film::find($request->id);

        if($realisateur->films->contains($film)){
            Log::debug("La relation existe déja");
        }
        else {
            $realisateur->films()->attach($film);
            $realisateur->save();
        }

        return redirect()->route('Netflix.index');

        }
        catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->route('Netflix.index');
        }

        return redirect()->route('Netflix.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        $suggestions = Film::where('id', '!=', $film->id)->get();
        return View('Netflix.show', compact('film', 'suggestions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        $realisateurs = Personne::pluck('nom', 'id');
        $producteurs = Personne::pluck('nom', 'id');
        $acteurs = Acteur::pluck('nom', 'id');
        return View('Netflix.modifierFilm', compact('film', 'realisateurs', 'producteurs', 'acteurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FilmRequest $request, Film $film)
    {
        try {
            $film->update($request->all());
        } catch (\Throwable $e) {
            Log::debug($e);
        }

        return redirect()->route('Netflix.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        try{
            $film = Film::findOrFail($id);

            $film->acteurs->detach();
            $film->producteurs()->detach();
            $film->realisateurs()->detach();
    
            $film->delete();
            return redirect()->route('Netflix.index')->with('message', "Suppression de ".$film->titre." réussi!");
        }
        catch(\Throwable $e){
            log::debug($e);
            return redirect()->route('Netflix.index')->withErrors(['la suppression du film '.$film->titre.' a échoué']);
        }
        return redirect()->route('Netflix.index');
    }
}
