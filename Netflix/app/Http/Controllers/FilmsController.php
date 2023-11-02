<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siecles = Film::where('annee', '<=', 2000)->get();
        $tarantinos = Film::where('realisateur_id', '=', '10')->get();
        $revoirs = Film::where('categorie', '=', 'À revoir')->get();
        $tendances = Film::where('categorie', '=', 'tendance')->get();
        $classics = Film::where('categorie', '=', 'classique')->get();
        $films = Film::all();
        return View('Netflix.netflix', compact('films', 'classics', 'tendances', 'revoirs', 'tarantinos', 'siecles'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('Netflix.createFilm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $film = new Film($request->all());
            $film->save();
        }
        catch(\Throwable $e) {
            Log::debug($e);
        }

        return redirect()->route('Netflix.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return View('Netflix.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
