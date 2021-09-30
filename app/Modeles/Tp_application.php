<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tp_application extends Model
{
    protected $table = "_allcontact";
    protected $filliable = ["id", "nom", "prenom", "email", "city", "country", "job"];
}
