<?php

namespace App\Http\Controllers;

use App\Models\Curricullum;
use Illuminate\Http\Request;
use App\Models\Level;
use App\Models\Subject;
use Illuminate\support\Facades\Auth;

class DashboardController extends Controller
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
        $curricullums = Curricullum::all();
        return view('auth.dashboard', compact('curricullums'));
    }

    public function create()
    {
        if (Auth::user()->id == 1){
            $levels = Level::all(['id', 'level']);
            $subjects = Subject::all(['id', 'subject']);
            return view('pages.create', compact('levels', 'subjects'));
        } else {
            return redirect('/');
        }
        
    
    }

    public function store(Request $request){
        Curricullum::create($request->all());
        return redirect('/dashboard')->withInput();
    }

    public function edit($id)
    {
        if (Auth::user()->id == 1){
            $curricullums = Curricullum::find($id);
            $levels = Level::all(['id', 'level']);
            $subjects = Subject::all(['id', 'subject']);
            return view('pages.edit', compact('levels', 'subjects', 'id'))->with('curricullums', $curricullums);
        } else{
            return redirect('/');
        }
        
    }

    public function update(Request $request, $id)
    {
        $curricullums = Curricullum::find($id);
        $curricullums->level = $request->input('level');
        $curricullums->subject = $request->input('subject');
        $curricullums->curricullum = $request->input('curricullum');
        $curricullums->save();
        return redirect('/dashboard')->withInput();  
    }

    public function delete($id){
        if (Auth::user()->id == 1){
            $curricullums = Curricullum::find($id);
        $curricullums->delete();
        return redirect('/dashboard')->with('error', 'Fellow Deleted Successfully');
        } else {
            return redirect('/');
        }
    }

}
