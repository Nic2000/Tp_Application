<?php

namespace App\Modeles;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    // 
    protected $table = "_allcontact";
    protected $filliable = ["id", "nom", "prenom", "email", "city", "country", "job"];
}
