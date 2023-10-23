<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class NetflixController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $revoirs = Film::where('categorie', '=', 'À revoir')->get();
        $tendances = Film::where('categorie', '=', 'tendance')->get();
        $classics = Film::where('categorie', '=', 'classique')->get();
        $films = Film::all();
        return View('Netflix.netflix', compact('films', 'classics', 'tendances'));
    }


    public function plus()
    {
        $films = Film::all();
        return View('Netflix.film', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
