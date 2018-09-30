<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexcontroller extends Controller
{
  
  public function welcome()
  {
    return view("welcome");
  }
  public function index()
  {
    return view("index");
  }
  public function comment()
  {
    return view("comment");
  }
  public function university()
  {
    return view ("university");
  }
}
