<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtudiantProgramme extends Model
{
    use HasFactory;
    protected $table = 'EtudiantProgramme';
    public $timestamps = false;
    protected $primaryKey =['idEtudiant', 'idProgramme'];
    public $incrementing = false;
    protected $fillable = ['idEtudiant', 'idProgramme'];
}
