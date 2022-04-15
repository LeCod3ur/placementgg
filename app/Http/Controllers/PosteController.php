<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePosteRequest;
use App\Http\Requests\UpdatePosteRequest;
use App\Http\Controllers\Controller;
use App\Models\Entreprise;
use App\Models\Poste;
use App\Models\Profil;
use Illuminate\Http\Request;

class PosteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listePostes = Poste::where('EstActif', true)->get()->sortByDesc('DatePublication');

        return view('postes.poste', compact('listePostes'));
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

        //Date et heure locale
        date_default_timezone_set('ETC');
        $date = date('Y-m-d G:i:s');
        return view('postes.create', compact('listeEntreprise', 'listeRecruteur', 'date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePosteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function createPosteForm(Request $request)
    {
        $Titre = $request->titre;
        $LieuDeTravail = $request->lieudetravail;
        $NombreDePoste = $request->nombredeposte;
        $TypeOffre = $request->typeoffre;
        $idEntreprise = $request->identreprise;
        $CreerPar = $request->creerpar;
        $Horaire = $request->horaire;
        $DureeEmploi = $request->dureeemploi;
        $DateDebutPoste = $request->datedebutposte;
        $DateFinPoste = $request->datefinposte;
        $DateFinOffre = $request->datefinoffre;
        $Description = $request->description;
        $Lieu = $request->lieu;

        $DatePublication = date('Y-m-d G:i:s');

        Poste::create([
            'idPoste' => null,
            'Titre' => $Titre,
            'LieuDeTravail' => $LieuDeTravail,
            'NombreDePoste' => $NombreDePoste,
            'TypeOffre' => $TypeOffre,
            'EstActif' => true,
            'idEntreprise' => $idEntreprise,
            'CreerPar' => $CreerPar,
            'Horaire' => $Horaire,
            'DureeEmploi' => $DureeEmploi,
            'DatePublication' => $DatePublication,
            'DateDebutPoste' => $DateDebutPoste,
            'DateFinPoste' => $DateFinPoste,
            'DateFinOffre' => $DateFinOffre,
            'Description' => $Description,
            'Lieu' => $Lieu
        ]);

        return redirect('/poste');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function posteDetail(Poste $poste, Request $request)
    {
        $idPoste = $request->idposte;
        $posteDetail = Poste::join('Entreprise', 'Entreprise.idEntreprise', '=', 'Poste.idEntreprise')->join('Profil', 'Profil.idProfil', '=', 'Poste.CreerPar')->select('*', 'Poste.Description as descriptionPoste')->where('idPoste', $idPoste)->get();
        return view('postes.detail', compact('posteDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function edit(Poste $poste, Request $request)
    {
        $idPoste = $request->idposte;
        $posteDetail = Poste::join('Entreprise', 'Entreprise.idEntreprise', '=', 'Poste.idEntreprise')->join('Profil', 'Profil.idProfil', '=', 'Poste.CreerPar')->select('*', 'Poste.Description as descriptionPoste')->where('idPoste', $idPoste)->get();
        $listeEntreprise = Entreprise::all();
        $listeRecruteur = Profil::all();
        return view('postes.edit', compact('posteDetail', 'poste', 'listeEntreprise', 'listeRecruteur' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePosteRequest  $request
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function updateForm(Request $request, Poste $poste)
    {
        $idPoste = $request->idposte;
        $Titre = $request->titre;
        $LieuDeTravail = $request->lieudetravail;
        $NombreDePoste = $request->nombredeposte;
        $TypeOffre = $request->typeoffre;
        $idEntreprise = $request->identreprise;
        $CreerPar = $request->creerpar;
        $Horaire = $request->horaire;
        $DureeEmploi = $request->dureeemploi;
        $DateDebutPoste = $request->datedebutposte;
        $DateFinPoste = $request->datefinposte;
        $DateFinOffre = $request->datefinoffre;
        $Description = $request->description;
        $Lieu = $request->lieu;

        Poste::where('idPoste', $idPoste)->update([
            'Titre' => $Titre,
            'LieuDeTravail' => $LieuDeTravail,
            'NombreDePoste' => $NombreDePoste,
            'TypeOffre' => $TypeOffre,
            'idEntreprise' => $idEntreprise,
            'CreerPar' => $CreerPar,
            'Horaire' => $Horaire,
            'DureeEmploi' => $DureeEmploi,
            'DateDebutPoste' => $DateDebutPoste,
            'DateFinPoste' => $DateFinPoste,
            'DateFinOffre' => $DateFinOffre,
            'Description' => $Description,
            'Lieu' => $Lieu
        ]);

        return redirect('/poste');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function desactiverForm(Request $request, Poste $poste)
    {
        $idPoste = $request->idposte;

        Poste::where('idPoste', $idPoste)->update([
            'EstActif' => false
        ]);

        return redirect('/poste');
    }
}
