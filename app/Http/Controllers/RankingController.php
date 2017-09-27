<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function index(){
        return view('ranking.index');
    }


    public function rankingGeral(){
        $lista = array(
            ['posicao' => 1, 'nome'=>'Fulano da Silva', 'pontos'=>9030],
            ['posicao' => 2, 'nome'=>'Ciclado da Silva', 'pontos'=>9002],
            ['posicao' => 3, 'nome'=>'Beltrano da Silva', 'pontos'=>8766],
            ['posicao' => 4, 'nome'=>'Mané da Silva', 'pontos'=>3003],
        );

        return json_encode($lista);
    }
}
