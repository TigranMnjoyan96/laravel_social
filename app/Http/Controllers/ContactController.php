<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\SignInRequest;
use App\Models\User;
use Auth;


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

    public function authSignIn(SignInRequest $req) {

        if(!Auth::attempt($req->only(['email', 'password'], $req->has('remember')))) {
           return redirect()->back()->with('info', 'Wrong Email or Password');
        }

        return redirect()->route('home')->with('info', 'You are logged in');
    }


    public function signOut() {
        Auth::logout();

        return redirect()->route('home');
    }
}
