<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doubtController extends Controller
{
    //
        public function show_form(){
            return view("form");
        }
        public function save_form(Request $request){
            $mail=$request ->input("email");
            $modulo=$request ->input("modulo");
            $asunto=$request ->input("aunto");
            $desc=$request ->input("desc");
        }
}
