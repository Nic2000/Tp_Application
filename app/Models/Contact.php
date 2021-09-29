<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contacts";
    protected $filliable = ["id","firstname","lastname","email","city","country","jobtitle"];

    public static function create($input){
        $contact =  new Contact();

        $contact->firstname = $input['firstname'];
        $contact->lastname = $input['lastname'];
        $contact->email = $input['email'];
        $contact->city = $input['city'];
        $contact->country = $input['country'];
        $contact->jobtitle = $input['jobtitle'];

        $contact->save();
    }
}
