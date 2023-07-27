<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioQuatroController extends Controller
{
    public function verificador(request $request){
        $entrada = $request->entrada;
        if ($request->numero % 2 == 0){
            return json_encode([
                'mensagem' => 'par'
            ]);
        } else {
            return json_encode([
                'mensagem' => "impar"
            ]);
        }

    }
}
