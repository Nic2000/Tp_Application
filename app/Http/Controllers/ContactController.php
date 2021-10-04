<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *@param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // =======================================validation formulaire

    public function create(Request $request)
    {
        $request->validate([
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'email' => 'required|email',
            'city' => 'required',
            'country' => 'required',
            'jobtitle' => 'required'
        ]);

        // verifie validation formulaire
        Contact::verify_validation_form($request);
        Contact::insert($request->input());
        return response()->json(['success'=>'add new contact is succed!']);
    }


    // =================================url pour acceder a la page creation de nouveaux
    public function addcontact(){
        return view('contact/addContact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     // ============================url permant d'acceder sur le page de la liste
    public function show($id=null)
    {
        $contact  = new Contact();
        $contacts = $contact->findAll();
        return view('contact/list_contact',compact('contacts'));
        // return response()->json(['data'=>$contacts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
         DB::delete('delete from contacts where id = '.$request->input('id'));
        $contact  = new Contact();
        $contacts = $contact->findAll();
        return response()->json(['success'=> $contacts]);
      
        // return response()->json(['success' => "Delete contact id: "+$request->input('id'),'data'=>$contacts]);
    }
}
