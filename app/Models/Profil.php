<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'Profil';
    public $timestamps = false;
    protected $primaryKey ='idProfil';
    public $incrementing = true;
    protected $fillable = ['idProfil', 'Courriel', 'MotDePasse', 'Nom', 'Prenom', 'Telephone', 'TypeProfil'];
}
