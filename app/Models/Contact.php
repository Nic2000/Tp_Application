<?php

namespace App\Models;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable=['id','firstname','lastname','email','city','country','jobtitle'];

    // fonction insert nouveau contact
    public static function insert($imput){
        
        $contact = new Contact();
        $contact->firstname =  $imput['firstname'];
        $contact->lastname =  $imput['lastname'];
        $contact->email =  $imput['email'];
        $contact->city =  $imput['city'];
        $contact->country =  $imput['country'];
        $contact->jobtitle =  $imput['jobtitle'];

        $contact->save();
    }

    // fonction find liste contact
    public function findAll(){  return Contact::get();   }

    // fonction find contact par id
    public function findById($id){
        return Contact::where('id',$id)->get();
    }

    //fonction de verification validation formulaire
    public static function verify_validation_form($imput){

        // message selon critere

        $rules=[
            'firstname.required' => 'the firstname field must not be nul ',
            'firstname.alpha' => 'the firstname field must not contain digits or number ',
            'firstname.min' => 'the firstname character minimum does not inferiour 1',
            'firstname.max' => 'the name character minimum does not superiour 1',
            'lastname.required' => 'the lastname field must not be nul ',
            'lastname.alpha' => 'the lastname field must not contain digits or number ',
            'city.required' => 'the city field must not be nul ',
            'city.alpha' => 'the city field must not contain digits or number ',
            'country.required' => 'the country field must not be nul ',
            'country.alpha' => 'the country field must not contain digits or number ',
            'email.required' => 'the email field must not be nul ',
            'email.alpha' => 'the email field must  container @ and . ',
            'email.email' => ' email is type email does not other type',
            'jobtitle.required' => 'the job title field must not be nul ',
            'jobtitle.alpha' => 'the job title field must not contain digits or number '
        ];

        // parfeu des champs
        $critereForm=[
            'firstname' => 'required|string|min:2|max:100|alpha',
            'lastname' => 'required|string|alpha',
            'email' => 'required|email',
            'city' => 'required|string|alpha',
            'country' => 'required|string|alpha',
            'jobtitle' => 'required|string|alpha'
            // 'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ];

        $imput->validate($critereForm, $rules);

    }
}
