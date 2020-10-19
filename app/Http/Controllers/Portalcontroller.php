<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Portalcontroller extends Controller
{
    //
    public function index (){
        return view('entrada');
    }
    public function listarEquipas () {
        $teams = [
            'Desportivo das Aves',
            'Moreirense',
            'Famalicão'
        ];
        return view('listar-equipas',['equipas'=>$teams]);
        
    }
    public function listarEquipa (Request $request){
        $teams = [
            'Desportivo das Aves',
            'Moreirense',
            'Famalicão'
        ];
        //obter o nome da equipa pretendida através do ID
        $equipa = $teams[$request->chave];
        return view('listar-equipas',['equipa'=>$equipa]);
    }
}