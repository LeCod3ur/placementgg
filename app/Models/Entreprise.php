<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    protected $table = 'Entreprise';
    public $timestamps = false;
    protected $primaryKey ='idEntreprise';
    public $incrementing = true;
    protected $fillable = ['idEntreprise', 'NomEntreprise', 'Courriel', 'NombreEmploye', 'Adresse', 'AnneeDeCreation', 'SiteWeb', 'SecteurActivite', 'Description', 'isHiring', 'EstActif'];
}
