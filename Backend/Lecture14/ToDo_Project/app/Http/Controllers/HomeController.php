<?php

namespace App\Http\Controllers;
use App\Models\todoModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tasks=todoModel::all();
        return view('home')->with('data',$tasks);
    }
    public function new()
    {
        return view('new');
    }
    public function add(request $request)
    {
        todoModel::create($request -> all());
        return redirect(to:'/home');
    }
}
