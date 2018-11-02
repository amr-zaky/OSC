<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use input;
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

    $post=Post::orderBy('created_at','DESC')->get();
    return  view("index")->with("posts",$post);

  }
  public function comment($id)
  {    
    $posts=Post::all();
    $post=$posts->where('post_id',$id);
    return view("comment")->with("posts",$post);
  }
  
  public function search(Request $request)
  {

    return $request->searchval;
    
    $posts=Post::all();
    $post=$posts->where('title',$request->searchval);
    return view("comment")->with("posts",$post);
  }

  public function university()
  {
    return view ("university");
  }


  public function create(Request $request)
  {
    
    $body=$request->body;
    $tilte=$request->tilte;
    $author=$request->author;

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
