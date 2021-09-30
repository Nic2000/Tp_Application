<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modeles\Test;
class AllcontactController extends Controller
{

    public function store(Request $request)
{
    $request->validate([
        'nom' => 'required|alpha',
        'prenom' => 'required|alpha',
        'email' => 'required|email',
        'city' => 'required',
        'country' => 'required',
        'job' => 'required',
    ]);

    $contact = new Test();
    $contact->nom = $request->nom;
    $contact->prenom = $request->prenom;
    $contact->email = $request->email;
    $contact->city = $request->city;
    $contact->country = $request->country;
    $contact->job = $request->job;
    $contact->save();

    $liste_contact = Test::all();
    return view('liste', compact('liste_contact'));
}

   //affichage des listes de contact
    public function liste_contact()
    {   

        $liste_contact = Test::get();
        return view('liste', compact('liste_contact'));
    }

    //Selection id 
    public function action($id)
    {   
      //  $select_contact = new Test();
        $select_contact =  Test::where('id',$id)->get();
         return view('modifier', compact('select_contact'));
        
    }

    //modification des données
    public function modifier(Request $request, $id)
        {
            $request->validate([
                'nom' => 'required|alpha',
                'prenom' => 'required|alpha',
                'email' => 'required|email',
                'city' => 'required',
                'country' => 'required',
                'job' => 'required'
            ]);
    
            // $id->update($request->all());
            $contact = Test::find($id);
            $contact->nom = $request->get('nom');
            $contact->prenom = $request->prenom;
            $contact->email = $request->email;
            $contact->city = $request->city;
            $contact->country = $request->country;
            $contact->job = $request->job;
            $contact->save();
                        $liste_contact = Test::get();
            return view('liste', compact('liste_contact'));
               
        }
    
   

}
