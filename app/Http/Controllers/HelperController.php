<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helpers;
class HelperController extends Controller
{
    //
    public function helper_inicio(){
        $version = Helpers::getVersion();
        return view('helper.home', compact('version'));
    }

   
































}
