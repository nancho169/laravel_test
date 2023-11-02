<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulariosController extends Controller
{
    //
    public function formularios_inicio(){
        return view('formularios.home');
    }

    public function formularios_simple(){
        $paises=array(
            array(
                "nombre"=>"Chile","id"=>1
            ),
            array(
                "nombre"=>"Perú","id"=>2
            ),
            array(
                "nombre"=>"Venezuela","id"=>3
            ),
            array(
                "nombre"=>"México","id"=>4
            ),
            array(
                "nombre"=>"España","id"=>5
            ),
        );
        $intereses=array(
            array(
                "nombre"=>"Chile","id"=>1
            ),
            array(
                "nombre"=>"Perú","id"=>2
            ),
            array(
                "nombre"=>"Venezuela","id"=>3
            ),
            array(
                "nombre"=>"México","id"=>4
            ),
            array(
                "nombre"=>"España","id"=>5
            ),
        );
        /*foreach($intereses as $key=>$interes){
            if(isset($_POST['interes_'.$key])){
                echo $_POST['interes_'.$key]."<br />";
            }
        }*/
        return view('formularios.simple',compact('paises','intereses'));
    }

    public function formularios_simple_post(Request $request){
        
        $request->validate([
            'nombre'=>'required|min:6',
            'correo'=>'required|email:rfc,dns',
            'descripcion'=>'required',
            'password'=>'required|min:6',
        ],
        [
            'nombre.required'=>'El campo nombre esta vacío',
            'nombre.min'=>'El campo nombre debe tener al menos 6 caracteres',
            'correo.required'=>'El campo correo esta vacío',
            'correo.email'=>'El email ingresado es invalido',
            'descripcion.required'=>'La descripción esta vacía',
            'password.required'=>'El campo password esta vaco',
            'password.min'=>'El campo password debe tener al menos 6 caracteres',
        ]
        
    
    );
    $intereses=array(
        array(
            "nombre"=>"Chile","id"=>1
        ),
        array(
            "nombre"=>"Perú","id"=>2
        ),
        array(
            "nombre"=>"Venezuela","id"=>3
        ),
        array(
            "nombre"=>"México","id"=>4
        ),
        array(
            "nombre"=>"España","id"=>5
        ),
    );
    foreach($intereses as $key=>$interes){
        if(isset($_POST['interes_'.$key])){
            echo $_POST['interes_'.$key]."<br />";
        }
    }
    }

    public function formularios_flash(){
        return view('formularios.flash');
    }
    public function formularios_flash2(Request $request){
        $request->session()->flash('css','success');
        $request->session()->flash('mensaje','mensaje desde ');
        return redirect()->route('formularios_flash3');
    }
    public function formularios_flash3(){
        return view('formularios.flash3');
    }

    public function formularios_upload(){
        return view('formularios.upload');
    }

    public function formularios_upload_post(Request $request){
        $request->validate([
            'foto'=>'required|mimes:jpg,png|max:2040'
        ],
        [
            'foto.required'=>'El campo foto esta vacío',
            'foto.mimes'=>'El campo foto debe ser JPG|PNG'
        ]
    );
    
    switch ($_FILES['foto']['type']) {
        case 'image/png':
                $archivo = time().".png";
            break;
        case 'image/jpg':
                $archivo = time().".jpg";
            break;
        
        
    }

    copy($_FILES['foto']['tmp_name'],'upload/img/'.$archivo);
    $request->session()->flash('css','success');
    $request->session()->flash('mensaje','Se subió el archivo exitosamente');
    return redirect()->route('formularios_upload');
    }
}

