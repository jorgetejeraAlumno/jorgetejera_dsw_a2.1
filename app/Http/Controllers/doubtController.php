<?php

namespace App\Http\Controllers;

use App\Models\Doubt;
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
            $Doubt = Doubt::create([
                "email"=>$mail,
                "modulo"=>$modulo,
                "asunto"=>$asunto,
                "desc"=>$desc

            ]);
             return view('request');
            
        }

        public function show_db(){
            $doubts = Doubt::all();
            $doubts_group=[];
            foreach($doubts as $doubt){
                $doubts_group[] = [
                    'id'=>$doubt -> id,
                    'email'=>$doubt -> email,
                    'modulo'=>$doubt -> modulo,
                    'asunto'=>$doubt -> asunto,
                    'desc' => $doubt -> desc
                ];
            }
            return view('list_doubts',['dudas' => $doubts_group]);
        }

        public function delete_db($id){
            $deleted = Doubt::destroy($id);
            return view('list_doubts');
        }
}
