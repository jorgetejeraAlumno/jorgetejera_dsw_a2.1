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
            $asunto=$request ->input("asunto");
            $desc=$request ->input("desc");
            $duda=;
            $ruta=storage_path('app/dudas.csv');
            $file = fopen($ruta,"a+");
            for($i= 0;$i<count($duda);$i++){
                fwrite($file,$duda[$i]);
            }
            fclose($file);
        }
}
