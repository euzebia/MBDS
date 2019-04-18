<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Speciality;

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

       $specialities = DB::table('specialities')->get();
        
       return view('home',compact('specialities'));
    }

    public function retrieve(){

        //$specialities = Speciality::all();
        
        return view('home',compact('specialities'));
    }
}
