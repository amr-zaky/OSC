<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Post;

class postcontroller extends Controller
{
    public function show()
    {
        $post =Post::all();
        return view('main')->with("posts",$post);
    }
}
