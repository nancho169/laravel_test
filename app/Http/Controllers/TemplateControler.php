<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateControler extends Controller
{
    //
    public function template_inicio(){
        return view('template.home');
    }

    public function template_stack(){
        return view('template.stack');
    }
}
