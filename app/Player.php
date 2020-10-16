<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['nome','cognome','ruolo','squadra','prezzo_asta','prezzo_base','note'];
}
