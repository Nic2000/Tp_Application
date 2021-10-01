<?php

namespace App\Http\Controllers\webapp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){

        return view("template_login_webapp.login");
    }
}
