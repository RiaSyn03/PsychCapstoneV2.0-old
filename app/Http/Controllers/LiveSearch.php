<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class LiveSearch extends Controller
{
    public function index()
    {
        return view('admin.users.index')
        ->with('posts', $this->getPosts() );
    }

    public function action(Request $request)
    {
        $posts = User::where('fname', 'LIKE', '%' . $request->get('searchQuest') . '%' )->get();

        return json_encode( $posts);

    }
}

