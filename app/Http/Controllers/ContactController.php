<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Concat;

class ContactController extends Controller
{
    //formulaire contact
    public function create(){
        $title = "contact";
        return view('addContact', ["title"=>$title]);
    }
    //add contact
    public function addContact(Request $request){
        $input = $request->all();

        Contact::addContact_rules($request);
        Contact::create($input);

        return back()->with('success','Contact created successfully');
    }
    //find all contacts
    public function contactList(){
        $data = DB::select('select * from contacts');
        return view('contactList', ["data"=>$data]);
    }
    //delete contact
    public function deleteContact(Request $request){
        $id = $request->input('id');
        DB::delete('delete from contacts where id = '.$id);
        return redirect("contactList");
    }
}
