<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Speciality;

use Illuminate\Support\Facades\Input;

class specialityController extends Controller
{
    public function create(){
    	return view('add_speciality');
    	
    }

    public function store(Request $request){
    	$speciality = new Speciality;
    	$speciality->name = Input::get('speciality_name');
    	$speciality->save();
    }

    
}
