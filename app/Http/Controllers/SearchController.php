<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class SearchController extends Controller
{
    public function searchUser(Request $req) {

        $query = $req->input('user');

        if(!$req) {
            return redirect()->route('home');
        }

        $users = User::where(DB::raw("CONCAT (first_name, ' ', last_name)" ), 'LIKE', "%{$query}%")
        ->orWhere('username', 'LIKE', "%{$query}%")
        ->get();

        return view('search.result')->with('users', $users);
    }

}
