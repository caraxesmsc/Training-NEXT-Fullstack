<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function indexFunction (){
        return view('welcome');
    }
    
    
    public function aboutFunction (){
        return view ('about');
    }
    public function contactFunction (){
        return view ('contact');
    }
}
