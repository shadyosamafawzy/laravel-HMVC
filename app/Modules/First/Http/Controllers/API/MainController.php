<?php

namespace First\Http\Controllers\API;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
   public function index(){
       return view('first::api.index');
   }
}
