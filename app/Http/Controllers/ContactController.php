<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('auth.signUp');
    }

    public function authSignUp(Request $req) {
        dd($req);
    }
}
