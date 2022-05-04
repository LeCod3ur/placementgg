<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsableGroupe extends Model
{
    use HasFactory;
    protected $table = 'ResponsableGroupe';
    public $timestamps = false;
    protected $primaryKey =['idResponsableStage', 'idGroupe'];
    public $incrementing = false;
    protected $fillable = ['idResponsableStage', 'idGroupe'];
}
