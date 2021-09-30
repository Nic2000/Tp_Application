<?php

namespace App\Models;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    protected $fillable=['id','first_name','last_name','email','city','country','job_title'];

    // fonction insert nouveau contact
    public function insert($imput){
        $contact = new Contact();
        $contact->first_name =  $imput['name'];
        $contact->last_name =  $imput['username'];
        $contact->email =  $imput['email'];
        $contact->city =  $imput['city'];
        $contact->country =  $imput['country'];
        $contact->job_title =  $imput['job_title'];

        $contact->save();
    }

    // fonction find liste contact
    public function findAll(){  return Contact::get();   }

    // fonction find contact par id
    public function findById($id){
        return Contact::where('id',$id)->get();
    }

    //fonction de verification validation formulaire
    public function verify_validation_form($imput){

        // message selon critere

        $rules=[
            'name.required' => 'the name field must not be nul ',
            'name.alpha' => 'the name field must not contain digits or number ',
            'name.min' => 'the name character minimum does not inferiour 1',
            'name.max' => 'the name character minimum does not superiour 1',
            'username.required' => 'the username field must not be nul ',
            'username.alpha' => 'the username field must not contain digits or number ',
            'city.required' => 'the city field must not be nul ',
            'city.alpha' => 'the city field must not contain digits or number ',
            'country.required' => 'the country field must not be nul ',
            'country.alpha' => 'the country field must not contain digits or number ',
            'email.required' => 'the email field must not be nul ',
            'email.alpha' => 'the email field must  container @ and . ',
            'email.email' => ' email is type email does not other type',
            'job_title.required' => 'the job title field must not be nul ',
            'job_title.alpha' => 'the job title field must not contain digits or number '
        ];

        // parfeu des champs
        $critereForm=[
            'name' => 'required|string|min:2|max:100|alpha',
            'username' => 'required|string|alpha',
            'email' => 'required|email',
            'city' => 'required|string|alpha',
            'country' => 'required|string|alpha',
            'job_title' => 'required|string|alpha'
            // 'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ];

        $imput->validate($critereForm, $rules);

    }


}
