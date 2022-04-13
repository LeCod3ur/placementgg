<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;
    protected $table = 'Poste';
    public $timestamps = false;
    protected $primaryKey ='idPoste';
    public $incrementing = true;
    protected $fillable = ['idPoste', 'Titre', 'LieuDeTravail', 'NombreDePoste', 'TypeOffre', 'EstActif', 'idEntreprise', 'CreerPar', 'Horaire', 'DureeEmploi', 'DatePublication', 'DateDebutPoste', 'DateFinPoste', 'DateFinOffre', 'Description', 'Lieu'];
}
