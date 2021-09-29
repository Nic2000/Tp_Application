<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function create(){
        $title = "contact";
        return view('addContact', ["title"=>$title]);
    }

    public function addContact(Request $request){
        $input = $request->all();

        $request->validate([
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'email' => 'required|email',
            'city' => 'required',
            'country' => 'required',
            'jobtitle' => 'required'
        ]);


        Contact::create($input);


        return back()->with('success','Contact created successfully');
    }

    public function contactList(){
        $data = DB::select('select * from contacts');
        return view('contactList', ["data"=>$data]);
    }

    public function deleteContact(Request $request){
        $id = $request->input('id');
        DB::delete('delete from contacts where id = '.$id);
        return redirect("contactList");
    }
}
