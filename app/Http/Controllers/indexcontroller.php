<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
use App\Category;
use Auth;

class indexcontroller extends Controller
{
  public function comment($id)
  {    
    $posts=Post::all();
    $post=$posts->where('post_id',$id);
    $cat=Category::all();
    return view("comment")->with("posts",$post)->with('cats',$cat);
  }

  
  public function welcome()
  {
    return view("welcome");
  }
  public function index()
  {

    $post=Post::all();
    $cat=Category::all();
    return view("index")->with("posts",$post)->with('cats',$cat);
  }
  


  public function university()
  {
    return view ("university");
  }


  public function create(Request $request)
  {
    

    $body=$request->body;
    $title=$request->title;
    $author=Auth::user()->name;
    $image=$request->imgefile;

   $photoName = time().'.'.$request->imgefile->getClientOriginalExtension();
  $request->imgefile->move(public_path('imgs'), $photoName);

    $post=new Post();
    $post->auther=$author;
    $post->title=$title;
    $post->body=$body;
    $post->User_id=auth()->user()->id;
    $post->category_id=1;
    $post->comment_count=2;
    $post->image="imgs/".$photoName;
    $post->save();
   return redirect()->intended(route('mainpage'));

   
  }

   public function search(Request $request)
  {

     
    $posts=Post::all();
    $post=$posts->where('title',$request->searchval);
     $cat=Category::all();  
    return view("comment")->with("posts",$post)->with('cats',$cat);
  }


  public function searchcat($name)
  {
    $name=strtolower($name);
    $posts=Post::all();
    $post=$posts->where('title',$name);  
     $cat=Category::all();
    return view("comment")->with("posts",$post)->with('cats',$cat); 
  }



  

}
