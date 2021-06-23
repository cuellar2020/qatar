<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    protected $fillable = ['fecha','jornada','pais','pais2','estado','resultado'];

    public $timestamps = false;

    public $table = "Partido";
}
