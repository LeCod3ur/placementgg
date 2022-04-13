<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruteur extends Model
{
    use HasFactory;
    protected $table = 'Recruteur';
    public $timestamps = false;
    protected $primaryKey ='idProfil';
    public $incrementing = false;
    protected $fillable = ['idProfil', 'Poste', 'Description', 'EstActif', 'idEntreprise'];
}
