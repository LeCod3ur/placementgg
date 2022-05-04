<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntenteStage extends Model
{
    use HasFactory;
    protected $table = 'EntenteStage';
    public $timestamps = false;
    protected $primaryKey ='idEntente';
    public $incrementing = true;
    protected $fillable = ['idEntente', 'idEntreprise', 'idResponsableStage', 'NomSuperviseurStage', 'TelephoneSuperviseurStage', 'CourrielSuperviseurStage', 'PosteSuperviseurStage', 'idEtudiant', 'DateDebutStage', 'DateFinStage', 'NombreHeureSemaine', 'HoraireDeTravail', 'StageRenumere', 'ReponseEtudiant', 'ApprobationResponsable', 'Description', 'DateCreationEntente', 'estActif', 'CreerPar' ];
}
