<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatureFichier extends Model
{
    use HasFactory;
    protected $table = 'CandidatureFichier';
    public $timestamps = false;
    protected $primaryKey =['idCandidature', 'idFichier'];
    public $incrementing = false;
    protected $fillable = ['idCandidature', 'idFichier'];
}
