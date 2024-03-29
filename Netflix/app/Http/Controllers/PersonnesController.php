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
        $usager = auth()->user();
        $personnes = Personne::all();

        $personnes = Personne::where('id', '<>', 999)->get();
        $personne999 = Personne::find(999);
        $personnes->push($personne999);
        $hommes = Personne::where('sexe', '=', 'H')->get();;
        $femmes = Personne::where('sexe', '=', 'F')->get();;
        $autres = Personne::where('sexe', '=', null)->get();;
        
        return View('Netflix.personne', compact('personnes', 'hommes', 'femmes', 'autres', 'usager'));
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

            $uploadFile = $request->file('portrait');
            $nomFichierUnique = '../images/realisateurs/' . str_replace(' ', '-',$personne->nom). '-' . uniqid() . '.' . $uploadFile->extension();
            try{
                $request->portrait->move(public_path('images/realisateurs'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }

            $personne->portrait = $nomFichierUnique;
            $personne->save();
        } catch (\Throwable $e) {
            Log::debug($e);
        }

        return redirect()->route('Netflix.index')->with('success', 'Ajout confirmé!');;
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

            $uploadFile = $request->file('portrait');
            $nomFichierUnique = '../images/realisateurs/' . str_replace(' ', '-',$personne->nom). '-' . uniqid() . '.' . $uploadFile->extension();
            try{
                $request->portrait->move(public_path('images/realisateurs'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }

            $personne->portrait = $nomFichierUnique;
            $personne->save();
        } catch (\Throwable $e) {
            Log::debug($e);
        }

        return redirect()->route('Netflix.index')->with('success', 'Modification confirmé!');;
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
        return redirect()->route('Netflix.personne')->with('success', 'Suppression confirmé!');;
    }
}
