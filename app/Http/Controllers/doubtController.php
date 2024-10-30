<?php

namespace App\Http\Controllers;

use App\Models\Doubt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
                'color' => 'required|in:black,red,green,blue'
            ],[
                'email.email'=>'Debes introducir un mail valido',
                'email.required'=>'El correo es obligatorio',
                'modulo.required'=>'Debes, obligatoriamente, seleccionar un modulo',
                'asunto.required'=>'Este es un campo obligatorio',
                'asunto.not_regex'=>'Caracteres numericos no validos',
                'asunto.max'=>'Tienes un limite de 50 caracteres',
                'desc.required'=>'Este campo es obligatorio',
                'desc.max'=>'Tienes un limite de 300 caracteres',
                'color.required'=>'Este es un campo obligatorio',
                'color.in'=>'Debes elegir uno de los colores validos:black,red,green,blue'

            ]);

            $mail=$request ->input("email"); 
            $modulo=$request ->input("modulo");
            $asunto=$request ->input("asunto");
            $desc=$request ->input("desc");
            $color=$request -> input('color');
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
                "desc"=>$desc,
                'color'=>$color

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
                    'desc' => $doubt -> desc,
                    'color'=>$doubt ->color
                ];
            }
            return view('list_doubts',['dudas' => $doubts_group]);
        }

        public function delete_db($id){
            $deleted = Doubt::destroy($id);
            return Redirect::to('list_doubts');
        }

        public function edit_db($id){
            $doubt1=Doubt::findOrFail($id);
            return view('form')->with('doubt',$doubt1);
        }
        public function edit_form(Request $request){
            $validatedData= $request->validate([
                'email' => 'required|email',
                'modulo' => 'required',
                'asunto' => 'required|not_regex:/^[0-9]+$/|max:50',
                'desc' => 'required|max:300',
                'color' => 'required|in:black,red,green,blue'
            ]);
            $id=$request ->id;
            $mail=$request ->input("email"); 
            $modulo=$request ->input("modulo");
            $asunto=$request ->input("asunto");
            $desc=$request ->input("desc");
            $color=$request -> input('color');

            $doubt_edit=doubt::find($id);
            $doubt_edit->email=$mail;
            $doubt_edit->modulo=$modulo;
            $doubt_edit->asunto=$asunto;
            $doubt_edit->desc=$desc;
            $doubt_edit->color=$color;
            $doubt_edit->save();

            return redirect::to('show.form');

        }
}
