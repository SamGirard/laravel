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
            
            $uploadedFile = $request->file('image');
            $nomFichierUnique = str_replace(' ', '_', $personne->nom) . '_' . uniqid() . '.' . $uploadedFile->extension();

            try{
                $request->image->move(public_path('../images/realisateurs'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }

            $personne->image = $nomFichierUnique;
            $personne->save();
            return redirect()->route('Netflix.index')->with('message', "Ajout du réalisateur " . $personne->nom . " réussi!");


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
    public function edit(Personne $personne)
    {
        return View('Netflix.modifierPersonnes', compact('personne'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonneRequest $request, Personne $personne)
    {
        try {
            $personne->update($request->all());
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
            $personne = Personne::findOrFail($id);

            $filmsRealises = $personne->filmsRealises()->get();
            foreach ($filmsRealises as $filmRealise){
                $filmRealise->realisateur_id = 999;
                $filmRealise->save();
            }

            $filmsProduits = $personne->filmsProduits()->get();
            foreach ($filmsProduits as $filmProduit){
                $filmProduit->producteur_id = 999;
                $filmProduit->save();
            }

            $personne->delete();
            return redirect()->route('Netflix.personne')->with('message', "Suppression de ".$personne->titre." réussi!");
        }
        catch(\Throwable $e){
            log::debug($e);
            return redirect()->route('Netflix.personne')->withErrors(['la suppression du film '.$personne->titre.' a échoué']);
        }
        return redirect()->route('Netflix.personne');
    }
}
