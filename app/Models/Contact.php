<?php

namespace App\Models;

use Dotenv\Validator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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

    public static function addContact_rules($data){
        $messages = [
            'firstname.required' => 'Entrer votre nom svp',
            'firstname.alpha' => 'Votre nom est incorrect',
            'lastname.required' => 'Entrer votre prénom svp',
            'lastname.alpha' => 'Votre nom est incorrect',
            'email.required' => 'Entrer votre email svp',
            'email.email' => 'Votre email est  incorrect',
            'city.required' =>'Entrer votre ville svp',
            'country.required' =>'Entrer votre pays svp',
            'jobtitle.required' =>'Entrer votre emploi svp'
        ];


        $rules = [
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'email' => 'required|email',
            'city' => 'required',
            'country' => 'required',
            'jobtitle' => 'required'
        ];
        $validator = $data->validate($rules,$messages);
    }
}
