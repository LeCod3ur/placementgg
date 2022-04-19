<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfilRequest;
use App\Http\Requests\UpdateProfilRequest;
use App\Http\Controllers\Controller;
use App\Models\Profil;
use App\Models\Poste;
use App\Models\Entreprise;
use App\Models\Recruteur;
use Illuminate\Http\Request;

class RecruteurController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $listeRecruteurs = Recruteur::all();
        return view('recruteurs.recruteur', compact('listeRecruteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listeRecruteur = Recruteur::all();
        $listeProfil = Profil::all();
        $listeEntreprise = Entreprise::all();
        return view('recruteurs.create', compact('listeRecruteur', 'listeProfil','listeEntreprise'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePosteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function createRecruteurForm(Request $request)
    {
        $idProfil = $request->idprofil;
        $Poste = $request->poste;
        $Descrciption = $request->description;
        $EstActif = $request->estactif;
        $idEntreprise = $request->identreprise;

        if(($request->estactif) == "oui"){
            $EstActif = true;
        }
        else if(($request->estactif) == "non"){
            $EstActif = false;
        }
        Recruteur::create([
            'idProfil' => $idProfil,
            'Poste' => $Poste,
            'Description' => $Descrciption,
            'EstActif' => $EstActif,
            'IdEntreprise' => $idEntreprise

        ]);

        return redirect('/recruteur');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function recruteurDetail(Recruteur $recruteur, Request $request)
    {
        $idProfil = $request->idProfil;
        $recruteurDetail = Recruteur::where('idProfil', $idProfil)->get();
        return view('recruteurs.detail', compact('recruteurDetail', 'recruteurDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Recruteur $recruteur, Request $request)
    {
        $idProfil = $request->idProfil;
        $recruteurDetail = Recruteur::where('idProfil', $idProfil)->get();
        return view('recruteurs.edit', compact('recruteur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfilRequest  $request
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recruteur $recruteur)
    {
        $idProfil = $request->idprofil;
        $Poste = $request->poste;
        $Description = $request->description;
        $EstActif = $request->estactif;
        $idEntreprise = $request->identreprise;

        Recruteur::where('idProfil', $idProfil)->update([
            'idProfil' => $idProfil,
            'Poste' => $Poste,
            'Description' => $Description,
            'EstActif' => $EstActif,
            'idEntreprise' => $idEntreprise

        ]);
        return redirect('/recruteur');
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Http\Requests\UpdateProfilRequest  $request
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function desactiver(Recruteur $recruteur, Request $request)
    {
        $idProfil = $request->idprofil;

        Recruteur::where('idProfil', $idProfil)->update([
            'EstActif' => false
        ]);
        return redirect('/recruteur');
    }









    }
