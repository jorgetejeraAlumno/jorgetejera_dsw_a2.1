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

            $validatedData= $request->validate([
                'email' => 'required|email',
                'modulo' => 'required',
                'asunto' => 'required|not_regex:/^[0-9]+$/|max:50',
                'desc' => 'required|max:300',
            ]);

            $mail=$request ->input("email"); 
            $modulo=$request ->input("modulo");
            $asunto=$request ->input("asunto");
            $desc=$request ->input("desc");
            /*$duda=[$mail,$modulo,$asunto,$desc];
            $ruta=storage_path('app/public/dudas.csv');
            $file = fopen($ruta,"a+");
            for($i= 0;$i<count($duda);$i++){
                fwrite($file,$duda[$i]);
                fwrite( $file,";");
            }
            fwrite($file,"\n");
            fclose($file);*/
            
            return redirect()->route('show.request')->with('success', 'Su duda ha sido enviada correctamente.');
        }
}
