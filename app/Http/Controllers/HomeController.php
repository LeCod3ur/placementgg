<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class HomeController extends Controller
{
    public function index()
    {
        $listePostes = Poste::where('EstActif', true)->get()->sortByDesc('DatePublication');

        return view('postes.poste', compact('listePostes'));
    }
}
