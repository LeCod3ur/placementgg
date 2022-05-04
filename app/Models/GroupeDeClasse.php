<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupeDeClasse extends Model
{
    use HasFactory;
    protected $table = 'GroupeDeClasse';
    public $timestamps = false;
    protected $primaryKey ='idGroupe';
    public $incrementing = true;
    protected $fillable = ['idGroupe', 'idSession', 'NumeroGroupe', 'DateDebutStage', 'DateFinStage', 'NombreHeureSemaine', 'NombreHeureSemaineMax'];
}
