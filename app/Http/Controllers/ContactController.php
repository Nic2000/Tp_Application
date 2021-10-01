<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
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
        $contact = new Contact();
        $contact->verify_validation_form($request);
        // ajout nouveaux contact
        $contact->insert($request->input());
        return response()->json(['success' => 'add new contact is succed!']);

    }

    public function testeCreate(Request $request){
        $contact = new Contact();
        $contact->verify_validation_form($request);
        $contact->insert($request->input());
        $contact->verify_validation_form($request);
       $val = $contact->verify($request);
        if ($val->passes()) {
            return response()->json(['error'=>$val->errors()->all()]);
        }

        $this->insert($request->input());
        return back()->with('success', 'add new contact is succed!');

    }

    /*
    public function testeCreate(Request $request){
        $contact = new Contact();

        return Contact::verify($request);
    }
*/
    // =================================url pour acceder a la page creation de nouveaux
    public function add_contact(){
        return view('contact/add_contact');
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

            if($id){

                $contacts = $contact->findById($id);
            } else {
                $contacts = $contact->findAll();
            }
            return view("contact.list_contact",compact('contacts'));
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
    public function destroy($id)
    {
        //
    }
}