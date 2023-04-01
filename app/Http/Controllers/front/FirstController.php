<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;

class FirstController extends Controller
{
  public function index() {
    return view('index',["name"=> "ahmed" , "age" => 30]);
}

public function index1() {
    return view('index1',["name"=> "ahmed" , "age" => 30]);
}  
}
