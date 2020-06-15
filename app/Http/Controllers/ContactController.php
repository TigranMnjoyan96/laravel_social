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

    public function authSignIn(Request $req) {
        $this->validate($req, [
            'email' => 'required|email',
            'password' => 'required|min:6|max:250'
        ]);

        if(!Auth::attempt($req->only(['email', 'password']))) {
           return redirect()->route('home')->with('info', 'Wrong Email or Password');
        }

        return redirect()->route('home')->with('info', 'You are logged in');
    }
}
