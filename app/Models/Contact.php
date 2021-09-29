<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    protected $fillable=['id','first_name','last_name','email','city','country','job_title'];

    public function insert($imput){
        $contact = new Contact();

        // var_dump($imput);
        $contact->first_name =  $imput['name'];
        $contact->last_name =  $imput['username'];
        $contact->email =  $imput['email'];
        $contact->city =  $imput['city'];
        $contact->country =  $imput['country'];
        $contact->job_title =  $imput['job_title'];

        $contact->save();
    }

    public function findAll(){  return Contact::get();   }

    public function findById($id){
        return Contact::where('id',$id)->get();
    }


}
