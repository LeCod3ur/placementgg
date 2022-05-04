<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;
    protected $table = 'Programme';
    public $timestamps = false;
    protected $primaryKey ='idProgramme';
    public $incrementing = true;
    protected $fillable = ['idProgramme', 'NomProgramme', 'DureeProgramme', 'Diplome', 'aDistance', 'Description', 'estActif'];
}
