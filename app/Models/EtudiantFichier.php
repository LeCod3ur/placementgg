<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtudiantFichier extends Model
{
    use HasFactory;
    protected $table = 'EtudiantFichier';
    public $timestamps = false;
    protected $primaryKey =['idEtudiant', 'idFichier'];
    public $incrementing = false;
    protected $fillable = ['idEtudiant', 'idFichier'];
}
