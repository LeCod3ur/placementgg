<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class HomeController extends Controller
{

    public function login()
    {

        return view('connexion.login');
    }
}
