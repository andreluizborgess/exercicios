<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioSeisController extends Controller
{
    public function(request $request){
        if($request -> 12){
            return "maior que 12 anos";
        }
    }
}
