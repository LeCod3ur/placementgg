<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Recruteur;

class HomeController extends Controller
{
    public function home()
    {
        $user = session()->get("userID");
        if($user != null)
        {
        $userIDSession = session()->get("userID");
        $userNomSession = session()->get("userNom");
        $userPrenomSession = session()->get("userPrenom");
        $userCourrielSession = session()->get("userCourriel");
        $userTypeProfilSession = session()->get("userTypeProfil");
        $activeUser = Recruteur::all()->where('idProfil', $userIDSession);
        return view ('Connexion.home', compact('userIDSession', 'userNomSession', 'userPrenomSession', 'userCourrielSession', 'userTypeProfilSession', 'activeUser'));
        }
        else
        {
            return redirect("/login");
        }

    }

    public function login()
    {

        return view('connexion.login');
    }

    public function loginForm(Request $request)
    {
        $Courriel = $request -> email;
        $MotDePasse = $request -> password;

        $user = Profil::where('Courriel', $Courriel)->where('MotDePasse', $MotDePasse)->first();
        $userID = Profil::where('Courriel', $Courriel)->value('idProfil');
        $userNom = Profil::where('Courriel', $Courriel)->value('Nom');
        $userPrenom = Profil::where('Courriel', $Courriel)->value('Prenom');
        $userCourriel = Profil::where('Courriel', $Courriel)->value('Courriel');
        $userTypeProfil = Profil::where('Courriel', $Courriel)->value('TypeProfil');

        if($user == null)
        {
            $messageConnexion = "Courriel et mot de passe incorrect. Veuillez réessayer!";
            return redirect('/login');
        } else
        {
            $request->session()->put("userID", $userID);
            $request->session()->put("userNom", $userNom);
            $request->session()->put("userPrenom", $userPrenom);
            $request->session()->put("userCourriel", $userCourriel);
            $request->session()->put("userTypeProfil", $userTypeProfil);

            return redirect('/home');
        }
    }

    public function logout(){
        session()->remove("userID");
        session()->remove("userNom");
        session()->remove("userPrenom");
        session()->remove("userCourriel");
        session()->remove("userTypeProfil");
        return redirect("/login");
    }
}
