<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Medicamento;
use App\Cidadao;
use App\Solicitacao;

class SolicitacoesController extends Controller
{
    public function solicitar($id)
    {
        $medicamento = Medicamento::find($id);
        
        return view('solicitacoes.solicitar', compact('medicamento'));
    }

    public static function getEnderecoSolicitante($id_user){
    	$endereco = DB::table('cidadao')->where('id_user',$id_user)->value('endereco');

    	return  $endereco;
    }

    public function store(Request $request, $id_user, $id_medicamento){
    	$this->validate($request, [
            'qtd' => 'required',
        ]);

        $solicitacao = new Solicitacao;
        $solicitacao->id_user = $request->id_user;
        $solicitacao->id_medicamento = $request->id_medicamento;
        $solicitacao->qtd = $request->qtd;
        $solicitacao->save();

        return redirect('medicamentos')->with('success', 'Medicamento solicitado com sucesso!');
    }

}
