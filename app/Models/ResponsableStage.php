<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsableStage extends Model
{
    use HasFactory;
    protected $table = 'ResponsableStage';
    public $timestamps = false;
    protected $primaryKey ='idResponsableStage';
    public $incrementing = true;
    protected $fillable = ['idResponsableStage', 'idProfil', 'NumeroEmploye'];
}
