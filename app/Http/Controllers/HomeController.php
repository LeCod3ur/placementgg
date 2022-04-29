<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Recruteur;
use App\Models\Entreprise;

class HomeController extends Controller
{
    public function home()
    {
        $user = session()->get("userID");
        if ($user != null) {
            $userIDSession = session()->get("userID");
            $userNomSession = session()->get("userNom");
            $userPrenomSession = session()->get("userPrenom");
            $userCourrielSession = session()->get("userCourriel");
            $userTypeProfilSession = session()->get("userTypeProfil");
            $activeUser = Recruteur::all()->where('idProfil', $userIDSession);
            return view('Connexion.home', compact('userIDSession', 'userNomSession', 'userPrenomSession', 'userCourrielSession', 'userTypeProfilSession', 'activeUser'));
        } else {
            return redirect("/login");
        }
    }

    public function login()
    {

        return view('connexion.login');
    }

    public function loginForm(Request $request)
    {
        $Courriel = $request->email;
        $MotDePasse = $request->password;

        $user = Profil::where('Courriel', $Courriel)->where('MotDePasse', $MotDePasse)->first();
        $userID = Profil::where('Courriel', $Courriel)->value('idProfil');
        $userNom = Profil::where('Courriel', $Courriel)->value('Nom');
        $userPrenom = Profil::where('Courriel', $Courriel)->value('Prenom');
        $userCourriel = Profil::where('Courriel', $Courriel)->value('Courriel');
        $userTypeProfil = Profil::where('Courriel', $Courriel)->value('TypeProfil');

        if ($user == null) {
            $messageConnexion = "Courriel et mot de passe incorrect. Veuillez réessayer!";
            return redirect('/login');
        } else {
            $request->session()->put("userID", $userID);
            $request->session()->put("userNom", $userNom);
            $request->session()->put("userPrenom", $userPrenom);
            $request->session()->put("userCourriel", $userCourriel);
            $request->session()->put("userTypeProfil", $userTypeProfil);

            return redirect('/home');
        }
    }

    public function logout()
    {
        session()->remove("userID");
        session()->remove("userNom");
        session()->remove("userPrenom");
        session()->remove("userCourriel");
        session()->remove("userTypeProfil");
        return redirect("/login");
    }

    public function inscription()
    {
        $listeEntreprise = Entreprise::all();
        return view('connexion.Signup', compact('listeEntreprise'));
    }

    public function create()
    {
        $listeProfil = Profil::all();
        $listeEntreprise = Entreprise::all();
        $listeRecruteur = Recruteur::all();
        return view('connexion.create', compact('listeProfil', 'listeEntreprise', 'listeRecruteur'));
    }
    public function createInscriptionForm(Request $request)
    {
        /* request()->validate([
            'courriel' => ['required', 'courriel']
          ]); */

        $Courriel = $request->courriel;
        $MotDePasse = $request->motdepasse;
        $Nom = $request->nom;
        $Prenom = $request->prenom;
        $Telephone = $request->telephone;
        $TypeProfil = 'recruteur';

        //verifier si le mail existe deja dans la BD
        if (Profil::where('Courriel', $Courriel)->first())
        return redirect('/signup')->with('message', 'Attention! ce profil existe deja');

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

        $idProfil=Profil::where('Courriel', $Courriel)->value('idProfil');

        $idEntreprise = $request->identreprise;
        //$idProfil = Profil::where('idProfil')->get()->sortByDesc('idProfil')->first()->idProfil;

        Recruteur::create([

            'idProfil' => $idProfil,
            'Poste' => $request->poste,
            'Description' => $request->description,
            'EstActif' => true,
            'idEntreprise' => $idEntreprise
        ]);

        return redirect('/login'); // redirection vers le login en attendant le landing page
    }
}
