<?php

namespace App\Http\Controllers;

use App\User;
use DB;
use Illuminate\Http\Request;

class UserFilterController extends Controller
{
    public function search()
    {
        $search_text = $_GET['query'];
        $users = User::where('name', 'LIKE', '%'.$search_text.'%')->with('name')->get();

        return view('users.search', compact('users'));
    }
}
