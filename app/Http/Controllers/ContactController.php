<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\User;


class ContactController extends Controller
{
    public function index() {
        return view('auth.signUp');
    }

    public function authSignUp(ContactRequest $req) {
        User::create([
            'email' => $req->input('email'),
            'username' => $req->input('username'),
            'password' => bcrypt($req->input('password'))
        ]);

        return redirect()->route('home')->with('info', 'Successfuly Registration');
    }

    public function signIn() {
        return view('auth.signIn');
    }

    public function authSignIn(ContactRequest $req) {
        dd($req);
    }
}
