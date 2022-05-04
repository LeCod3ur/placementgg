<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'Image';
    public $timestamps = false;
    protected $primaryKey ='idImage';
    public $incrementing = true;
    protected $fillable = ['idImage', 'NomImage', 'CheminImage', 'idProfil'];
}
