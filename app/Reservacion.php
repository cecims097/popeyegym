<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    //
    protected $fillable = [
        'numero','fecha','comentario','nombre',
    ];
}
