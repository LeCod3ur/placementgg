<?php

use Illuminate\Support\Facades\Route;
use App\Models\Poste;
use App\Http\Controllers\PosteController;

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

Route::get('/poste', [PosteController::class,'index'])->name('poste');
