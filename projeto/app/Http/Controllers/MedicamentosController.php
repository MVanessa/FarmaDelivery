<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Medicamento;
use Illuminate\Support\Facades\Gate;

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

    public function show($id)
    {
        $medicamento = Medicamento::find($id);
        
        return view('medicamentos.show', compact('medicamento'));
    }

    public function edit($id)
    {
        $medicamento = Medicamento::findOrFail($id);

        return view('medicamentos.edit',compact('medicamento'));
    }

    public function solicitar()
    {
         return view('medicamentos.solicitar');
    }

    public function update(Request $request, $id)
    {
        $medicamento = Medicamento::findOrFail($id);

        $medicamento->nome = $request->nome;
        $medicamento->fabricante = $request->fabricante;
        $medicamento->qtd = $request->qtd;
        $medicamento->peso = $request->peso;
        $medicamento->indicacoes = $request->indicacoes;
        $medicamento->contraindicacoes = $request->contraindicacoes;
        $medicamento->reacoes = $request->reacoes;
        $medicamento->save();

        return redirect('medicamentos')->with('message', 'Medicamento atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $medicamento = Medicamento::findOrFail($id);
        $medicamento->delete();

        session()->flash('message', 'Medicamento foi excluído com sucesso!');

        return redirect('medicamentos');
    }
}
