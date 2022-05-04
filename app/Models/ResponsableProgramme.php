<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsableProgramme extends Model
{
    use HasFactory;
    protected $table = 'ResponsableProgramme';
    public $timestamps = false;
    protected $primaryKey =['idResponsableStage', 'idProgramme'];
    public $incrementing = false;
    protected $fillable = ['idResponsableStage', 'idProgramme'];
}
