<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personne;
use App\Http\Requests\PersonneRequest;
use Illuminate\Support\Facades\Log;

class PersonnesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personnes = Personne::all();
        return View('Netflix.personne', compact('personnes'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('Netflix.createPersonnes');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonneRequest $request)
    {
        try {
            $personne = new Personne($request->all());
            $personne->save();
        } catch (\Throwable $e) {
            Log::debug($e);
        }

        return redirect()->route('Netflix.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personne $personne)
    {
        
        return View('Netflix.zoom', compact('personne'));
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
