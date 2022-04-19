<?php


use Illuminate\Support\Facades\Route;
use App\Models\Poste;
use App\Models\Profil;
use App\Models\Entreprise;
use App\Models\Recruteur;
use App\Http\Controllers\PosteController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\RecruteurController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Connexion à l'application */
Route::get('/login', [HomeController::class,'login']);
Route::post('/loginform', [HomeController::class, 'loginForm'])->name('loginForm');

/* Accueil */
Route::get('/home', [HomeController::class,'home']);

/* Deconnexion */
Route::get('/logout',[HomeController::class, 'logout'])->name('logout');


/* Poste */

//View pour la liste des postes
Route::get('/poste', [PosteController::class,'index'])->name('poste');

//View Creation d'un poste
Route::get('/createposte', [PosteController::class,'create'])->name('createPoste');
Route::post('/creerposte', [PosteController::class, 'createPosteForm'])->name('addNewPoste');

//View pour voir les détails d'un poste
Route::post('/postedetail', [PosteController::class,'posteDetail'])->name('posteDetail');

//View pour editer un poste
Route::post('/editposte', [PosteController::class,'edit'])->name('editPoste');
Route::post('/editPoste', [PosteController::class, 'updateForm'])->name('updatePoste');

//View pour effacer un poste
Route::post('/desactiverposte', [PosteController::class,'desactiverForm'])->name('desactiverPoste');



/* Entreprise */

//View pour la liste des entreprises
Route::get('/entreprise', [EntrepriseController::class,'index'])->name('entreprise');

//View Creation d'une entreprise
Route::get('/createentreprise', [EntrepriseController::class,'create'])->name('createEntreprise');
Route::post('/creerentreprise', [EntrepriseController::class, 'createEntrepriseForm'])->name('addNewEntreprise');

//View pour les détails de l'entreprise
Route::post('/entreprisedetail', [EntrepriseController::class,'entrepriseDetail'])->name('entrepriseDetail');

//View pour editer une entreprise
Route::post('/editentreprise', [EntrepriseController::class,'edit'])->name('editEntreprise');
Route::post('/editentrepriseform', [EntrepriseController::class, 'updateForm'])->name('updateEntreprise');

//View pour effacer une entreprise
<<<<<<< HEAD
Route::post('/desactiverentreprise', [EntrepriseController::class,'desactiverForm'])->name('desactiverEntreprise');

/*  Profil  */
Route::get('/profil', [ProfilController::class,'index'])->name('profil');
=======
Route::post('/desactiverEntreprise', [EntrepriseController::class,'desactiver'])->name('desactiverEntreprise');

/* Profil */

//View pour la liste des profil
Route::get('/profil', [ProfilController::class,'index'])->name('profil');

//View Creation d'un profil
Route::get('/createProfil', [ProfilController::class,'create'])->name('createProfil');
Route::post('/creerProfil', [ProfilController::class, 'createProfilForm'])->name('addNewProfil');

//View pour les détails du profil
Route::post('/profilDetail', [ProfilController::class,'profilDetail'])->name('profilDetail');

//View pour editer un profil
Route::post('/editProfil', [ProfilController::class,'edit'])->name('editProfil');
Route::post('/editProfil', [ProfilController::class, 'update'])->name('updateProfil');

//View pour effacer un profil
Route::post('/desactiverProfil', [ProfilController::class,'desactiver'])->name('desactiverProfil');

/* Recruteur */

//View pour la liste des recruteur
Route::get('/recruteur', [RecruteurController::class,'index'])->name('recruteur');

//View Creation d'un recruteur
Route::get('/createRecruteur', [RecruteurController::class,'create'])->name('createRecruteur');
Route::post('/creerRecruteur', [RecruteurController::class, 'createRecruteurForm'])->name('addNewRecruteur');

//View pour les détails du recruteur
Route::post('/recruteurDetail', [RecruteurController::class,'recruteurDetail'])->name('recruteurDetail');

//View pour editer un recruteur
Route::post('/editRecruteur', [RecruteurController::class,'edit'])->name('editRecruteur');
Route::post('/editRecruteur', [RecruteurController::class, 'update'])->name('updateRecruteur');

//View pour effacer un recruteur
Route::post('/desactiverRecruteur', [RecruteurController::class,'desactiver'])->name('desactiverRecruteur');
>>>>>>> elian
