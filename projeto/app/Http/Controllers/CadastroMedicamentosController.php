<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroMedicamentosController extends Controller
{
    public function exibeCadastroMedicamentos(){
        return view('home');
    }
}
