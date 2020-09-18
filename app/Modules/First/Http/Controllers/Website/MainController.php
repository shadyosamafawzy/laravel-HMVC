<?php

namespace First\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use First\Http\Requests\Store;

class MainController extends Controller
{
   public function index(Store $request){
       return view('first::website.index');
   }
}
