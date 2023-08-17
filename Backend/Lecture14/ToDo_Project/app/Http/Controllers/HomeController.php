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
        $request->validate([
            'name' => 'required|max:250',
            'details' => 'required|max:250',
            'deadline' => 'required'
        ]);
        todoModel::create($request -> all());
        return redirect(to:'/home');
    }
    public function delete($id){
        $task=todoModel::find($id);
        $task->delete();
        return redirect(to:'/home');
    }
    public function update($id){
        $task=todoModel::find($id);
        return view('edit')->with('toEdit',$task);
    }
    
    public function updatedDatafunc($id,request $request){
        $request->validate([
            'name' => 'required|max:250',
            'details' => 'required|max:250',
            'deadline' => 'required'
        ]);
        $task=todoModel::find($id);
        $task->update($request -> all());
        return redirect(to:'/home');

    }
}
