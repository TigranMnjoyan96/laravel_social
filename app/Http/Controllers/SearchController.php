<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class SearchController extends Controller
{
    public function searchUser(Request $req) {

        if(!$req) {
            return redirect()->route('home');
        }

        $users = User::where()

        return view('search.result', ['users' => $req->all()]);
    }
}
