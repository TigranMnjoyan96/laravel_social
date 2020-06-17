<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function profileUser($username) {

        $username = User::where('username', $username)->first();


        if(!$username) {
            abort(404);
        }

        return view('profile.user', ['user' => $username]);
    }

    public function editProfile() {
        return view('profile.editProfile');
    }

    public function postEdit() {
        return ;
    }
}
