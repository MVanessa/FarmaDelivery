<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Medicamento;

class MedicamentosController extends Controller
{
    public function index(){
        $medicamentos = Medicamento::all();
        return view('medicamentos.index',['todosmedicamentos' => $medicamentos]);
    }
}
