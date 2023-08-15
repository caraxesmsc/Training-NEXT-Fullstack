<?php

namespace App\Http\Controllers;
use App\Models\st_model2;
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
    public function formSubmit(request $request){
        st_model2::create($request -> all());
        return redirect(to:'/about');
    }
}
