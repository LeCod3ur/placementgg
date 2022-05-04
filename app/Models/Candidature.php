<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;
    protected $table = 'Candidature';
    public $timestamps = false;
    protected $primaryKey ='idCandidature';
    public $incrementing = true;
    protected $fillable = ['idCandidature', 'idEtudiant', 'idPoste', 'Status', 'RaisonStatus', 'DataPostuler', 'Info'];
}
