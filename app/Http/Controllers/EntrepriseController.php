<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Profil;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listeEntreprise = Entreprise::where('EstActif', true)->get();
        return view('entreprises.entreprise', compact('listeEntreprise'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listeEntreprise = Entreprise::all();
        $listeRecruteur = Profil::all();
        return view('entreprises.create', compact('listeEntreprise', 'listeRecruteur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePosteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function createEntrepriseForm(Request $request)
    {
        $NomEntreprise = $request->nomentreprise;
        $Courriel = $request->courriel;
        $NombreEmploye = $request->nombreemploye;
        $Adresse = $request->adresse;
        $AnneeDeCreation = $request->anneecreation;
        $SiteWeb = $request->siteweb;
        $SecteurActivite = $request->secteuractivite;
        $Description = $request->description;

        if(($request->ishiring) == "1"){
            $isHiring = true;
        }
        else if(($request->ishiring) == "0"){
            $isHiring = false;
        }

        Entreprise::create([
            'idEntreprise' => null,
            'NomEntreprise' => $NomEntreprise,
            'Courriel' => $Courriel,
            'NombreEmploye' => $NombreEmploye,
            'Adresse' => $Adresse,
            'EstActif' => true,
            'AnneeDeCreation' => $AnneeDeCreation,
            'SiteWeb' => $SiteWeb,
            'SecteurActivite' => $SecteurActivite,
            'Description' => $Description,
            'isHiring' => $isHiring
        ]);

        return redirect('/entreprise');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function entrepriseDetail(Entreprise $entreprise, Request $request)
    {
        $idEntreprise = $request->identreprise;
        $entrepriseDetail = Entreprise::where('idEntreprise', $idEntreprise)->get();
        return view('entreprises.detail', compact('entrepriseDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise, Request $request)
    {
        $idEntreprise = $request->identreprise;
        $entrepriseDetail = Entreprise::where('idEntreprise', $idEntreprise)->get();
        return view('entreprises.edit', compact('entrepriseDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePosteRequest  $request
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        $idEntreprise = $request->identreprise;
        $NomEntreprise = $request->nomentreprise;
        $Courriel = $request->courriel;
        $NombreEmploye = $request->nombreemploye;
        $Adresse = $request->adresse;
        $AnneeDeCreation = $request->anneecreation;
        $SiteWeb = $request->siteweb;
        $SecteurActivite = $request->secteuractivite;
        $Description = $request->description;

        if(($request->ishiring) == "1"){
            $isHiring = true;
        }
        else if(($request->ishiring) == "0"){
            $isHiring = false;
        }

        Entreprise::where('idEntreprise', $idEntreprise)->update([
            'NomEntreprise' => $NomEntreprise,
            'Courriel' => $Courriel,
            'NombreEmploye' => $NombreEmploye,
            'Adresse' => $Adresse,
            'AnneeDeCreation' => $AnneeDeCreation,
            'SiteWeb' => $SiteWeb,
            'SecteurActivite' => $SecteurActivite,
            'Description' => $Description,
            'isHiring' => $isHiring
        ]);

        return redirect('/entreprise');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function desactiver(Request $request, Entreprise $entreprise)
    {
        $idEntreprise = $request->identreprise;

        Entreprise::where('idEntreprise', $idEntreprise)->update([
            'EstActif' => false
        ]);

        return redirect('/entreprise');
    }
}
