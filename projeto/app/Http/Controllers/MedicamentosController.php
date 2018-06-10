<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        return redirect('medicamentos')->with('success', 'Medicamento cadastrado com sucesso!');
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

        return redirect('medicamentos')->with('success', 'Medicamento atualizado com sucesso!');
    }

    public function destroy($id)
    {
        try {
            $medicamento = Medicamento::findOrFail($id);
            $medicamento->delete();

            session()->flash('success', 'Medicamento foi excluído com sucesso!');
            return redirect('medicamentos');
        } catch (\Exception $e) {
            return redirect('medicamentos')->with('error', 'Não foi possível excluir o medicamento! '. $e->getMessage());
        }
    }
}
