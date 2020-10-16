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
        
    }
}