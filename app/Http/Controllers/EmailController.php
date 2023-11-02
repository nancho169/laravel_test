<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EjemploMailable;
use Illuminate\Support\Facades\Mail;
class EmailController extends Controller
{
    //
    public function email_inicio(){
        return view('email.home');
    }

    public function email_enviar(Request $request){
        
        $html = "<h1>Este es el cuerpo del correo</h1><hr/>
        ";
        $correo = new EjemploMailable($html);
        Mail::to("nancho@riogallegos.gob.ar")->send($correo);
        $request->session()->flash('css','success');
        $request->session()->flash('mensaje','Se envió el mail exitosamente');
        return redirect()->route('email_inicio');


    }


}
