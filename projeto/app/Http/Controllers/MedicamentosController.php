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

    public function create()
    {
        return view('medicamentos.create');
    }

    public function store(Request $request)
    {
         $this->validate($request, [
            'nome' => 'required',
            'fabricante' => 'required',
            'qtd' => 'required',
        ]);

        $medicamento = new Medicamento;
        $medicamento->nome = $request->nome;
        $medicamento->fabricante = $request->fabricante;
        $medicamento->qtd = $request->qtd;
        $medicamento->peso = $request->peso;
        $medicamento->indicacoes = $request->indicacoes;
        $medicamento->contraindicacoes = $request->contraindicacoes;
        $medicamento->reacoes = $request->reacoes;
        $medicamento->save();
        return redirect('medicamentos')->with('message', 'Medicamento cadastrado com sucesso!');
    }
}
