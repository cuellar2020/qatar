<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    
    protected $fillable = ['imagen','nombre','partidosJ','ganados','empatados','perdidos','golesF','golesC','golesD','puntos'];

    public $timestamps = false;
}

