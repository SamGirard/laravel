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
