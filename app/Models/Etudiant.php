<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $table = 'Etudiant';
    public $timestamps = false;
    protected $primaryKey ='idEtudiant';
    public $incrementing = true;
    protected $fillable = ['idEtudiant', 'idProfil', 'Ville', 'GroupeDeClasse', 'Description', 'NumeroAdmission', 'enRechercheEmploi'];
}
