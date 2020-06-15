<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index() {
        return view('auth.signUp');
    }

    public function authSignUp(ContactRequest $req) {
        return redirect()->route('home')->with('info', 'Successfuly Registration');
    }
}
