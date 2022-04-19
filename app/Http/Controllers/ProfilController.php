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

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listeProfils = Profil::all();
        return view('profils.profil', compact('listeProfils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listeProfils = Profil::all();
        return view('profils.create', compact('listeProfils'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function createProfilForm(Request $request)
    {
        $Courriel = $request->courriel;
        $MotDePasse = $request->motdepasse;
        $Nom = $request->nom;
        $Prenom = $request->prenom;
        $Telephone = $request->telephone;
        $TypeProfil = $request->typeprofil;
        //$EstActif = $request->estactif;
        Profil::create([
            'idProfil' => null,
            'Courriel' => $Courriel,
            'MotDePasse' => $MotDePasse,
            'Nom' => $Nom,
            'Prenom' => $Prenom,
            'Telephone' => $Telephone,
            'TypeProfil' => $TypeProfil,
            'EstActif' => true
           
        ]);

        return redirect('/profil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function profilDetail(Profil $profil, Request $request)
    {
        $idProfil = $request->idProfil;
        $profilDetail = Profil::where('idProfil', $idProfil)->get();
        return view('profils.detail', compact('profilDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil, Request $request)
    {   
        $idProfil = $request->idProfil;
        $profilDetail = Profil::where('idProfil', $idProfil)->get();
        return view('profils.edit', compact('profil'));       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfilRequest  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $profil)
    {
        $idProfil = $request->idprofil;
        $Courriel = $request->courriel;
        $MotDePasse = $request->motdepasse;
        $Nom = $request->nom;
        $Prenom = $request->prenom;
        $Telephone = $request->telephone;
        $TypeProfil = $request->typeprofil;

        Profil::where('idProfil', $idProfil)->update([
            'Courriel' => $Courriel,
            'MotDePasse' => $MotDePasse,
            'Nom' => $Nom,
            'Prenom' => $Prenom,
            'Telephone' => $Telephone,
            'TypeProfil' => $TypeProfil
        ]);
        return redirect('/profil');
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Http\Requests\UpdateProfilRequest  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function desactiver(Profil $profil, Request $request)
    {   
        $idProfil = $request->idprofil;

        Profil::where('idProfil', $idProfil)->update([
            'EstActif' => false
        ]);
        return redirect('/profil');
    }
}
