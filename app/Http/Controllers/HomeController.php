<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home_inicio(){

        $texto =  "Inicio del home";
        $numero = 12;
        
        $paises=array(
            array(
                "nombre"=>"Chile", "dominio"=>"cl"
            ),
            array(
                "nombre"=>"Perú", "dominio"=>"pe"
            ),
            array(
                "nombre"=>"Venezuela", "dominio"=>"ve"
            ),
            array(
                "nombre"=>"México", "dominio"=>"mx"
            ),
            array(
                "nombre"=>"España", "dominio"=>"es"
            )
        );
        //return view('home', compact('ssss','sss'));
        return view('home', ['texto'=>$texto,'numero'=>$numero,'paises'=>$paises]);
    }

    public function home_hola(){

        ECHO "HOLA";
    }

    public function saludo(){
        echo "Saludo";
    }

    public function parametros($id,$slug,$page){


        return view('parametros',['id'=>$id,'slug'=>$slug,'page'=>$page]);
    }

    
}
