<?php

namespace App\Http\Controllers;

use App\Models\Curricullum;
use App\Models\Subject;
use App\Models\Level;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function jss(){
        return view('pages.jss');
    }

    public function sss(){
        return view('pages.sss');
    }

    Public function sss1(){
        return view('sss.sss1');
    }

    Public function sss2(){
        return view('sss.sss2');
    }

    Public function sss3(){
        return view('sss.sss3');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

}
