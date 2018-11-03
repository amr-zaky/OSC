<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class indexcontroller extends Controller
{
  
  public function welcome()
  {
    return view("welcome");
  }
  public function index()
  {
    $var = Post::orderBy('post_id', 'DESC')->get();
    return view("index") ->with ("var",$var);
  }
  public function comment(Request $request)
  {

    $var = Post::where('post_id',$request->id)->first();
    $com = Comment::where('post_id'  , $request->id)->get();
    //$com = Comment::all();

    //return $com;
    return  view('comment', [
      'com' => $com,
      'var' => $var
  ]);
  }
  public function university()
  {
    return view ("university");
  }

  public function addcomment(Request $request)
  {
    $var = new Comment;
    $var->post_id = $request->id;
    $var->body = $request->body;
    $var->save(); 

    return redirect("main/".$var->post_id);
  }
  public function addPost(Request $request)
  {
    $var = new Post();

    $var->title = $request->title;
    $var->auther = $request->auther;
    $var->body= $request->body;
    $var->User_id = 1;
    $var->comment_count = 0;
    $var->image = $request->image;
    $var->category_id = 1;

    $var->save();

    return redirect('main');
  }

}
