<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    use HasFactory;
    protected $table = 'Fichier';
    public $timestamps = false;
    protected $primaryKey ='idFichier';
    public $incrementing = true;
    protected $fillable = ['idFichier', 'NomFichier', 'CheminFichier', 'DateCreation', 'TypeFichier'];
}
