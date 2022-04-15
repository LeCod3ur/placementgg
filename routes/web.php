<?php

use App\Http\Controllers\EntrepriseController;
use Illuminate\Support\Facades\Route;
use App\Models\Poste;
use App\Http\Controllers\PosteController;
use App\Http\Controllers\ProfilController;

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


/* Poste */

//View pour la liste des postes
Route::get('/poste', [PosteController::class,'index'])->name('poste');

//View Creation d'un poste
Route::get('/createposte', [PosteController::class,'create'])->name('createposte');
Route::post('/creerPoste', [PosteController::class, 'createPosteForm'])->name('addNewPoste');

//View pour voir les détails d'un poste
Route::post('/postedetail', [PosteController::class,'posteDetail'])->name('posteDetail');

//View pour editer un poste
Route::post('/editposte', [PosteController::class,'edit'])->name('editposte');
Route::post('/editPoste', [PosteController::class, 'updateForm'])->name('updatePoste');

//View pour effacer un poste
Route::post('/desactiverposte', [PosteController::class,'desactiverForm'])->name('desactiverposte');



/* Entreprise */

//View pour la liste des entreprises
Route::get('/entreprise', [EntrepriseController::class,'index'])->name('entreprise');

//View Creation d'une entreprise
Route::get('/createentreprise', [EntrepriseController::class,'create'])->name('createentreprise');
Route::post('/creerEntreprise', [EntrepriseController::class, 'createEntrepriseForm'])->name('addNewEntreprise');

//View pour les détails de l'entreprise
Route::post('/entreprisedetail', [EntrepriseController::class,'entrepriseDetail'])->name('entrepriseDetail');

//View pour editer une entreprise
Route::post('/editentreprise', [EntrepriseController::class,'edit'])->name('editentreprise');
Route::post('/editEntreprise', [EntrepriseController::class, 'updateForm'])->name('updateEntreprise');

//View pour effacer une entreprise
Route::post('/desactiverEntreprise', [EntrepriseController::class,'desactiverForm'])->name('desactiverEntreprise');


/*  Profil  */
Route::get('/profil', [ProfilController::class,'index'])->name('profil');
