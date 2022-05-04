<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $table = 'Session';
    public $timestamps = false;
    protected $primaryKey ='idSession';
    public $incrementing = true;
    protected $fillable = ['idSession', 'NomSession'];
}
