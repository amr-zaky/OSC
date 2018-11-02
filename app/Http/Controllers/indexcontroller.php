<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class indexcontroller extends Controller
{
  
  public function welcome()
  {
    return view("welcome");
  }
  public function index()
  {

    $post=Post::all();

    return view("index")->with("posts",$post);
  }
  public function comment()
  {
    return view("comment");
  }
  public function university()
  {
    return view ("university");
  }


  public function create(Request $request)
  {
    
    $body=$request->body;
    $tilte=$request->tilte;
    $author=Auth::user()->name;
    $image=$request->imgefile;

   $photoName = time().'.'.$request->imgefile->getClientOriginalExtension();

  /*
  talk the select file and move it public directory and make avatars
  folder if doesn't exsit then give it that unique name.
  */
  $request->imgefile->move(public_path('avatars'), $photoName);

    $post=new Post();
    $post->author=$author;
    $post->tilte=$tilte;
    $post->body=$body;
    $post->User_id=auth()->user()->id;
    $post->category_id=1;
    $post->image="imgs/post.jpg";

    $post->save();

    return redirect('/main');
  }



}
