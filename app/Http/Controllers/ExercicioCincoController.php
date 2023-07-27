<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioCincoController extends Controller
{
    public function numeroInteiro (request $request){
    
        if($request-> n % 4 == 0){
            return json_encode([
                'numero'=> "é divisivel po 4"
            ]);
        } else {
            return json_encode([
                'numero'=> "nao divisivel"
            ]);
        }






    }
}
