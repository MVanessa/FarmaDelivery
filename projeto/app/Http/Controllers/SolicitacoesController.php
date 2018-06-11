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

    public static function getEnderecoSolicitante($id_user)
    {
    	$endereco = DB::table('cidadao')->where('id_user',$id_user)->value('endereco');

    	return  $endereco;
    }

    public function atualizaEstoque($id_medicamento, $qtdSolicitada){
        $qtdDisponivel = $this->verificaQtdDisponivel($id_medicamento);
        $qtdAtualizada = $qtdDisponivel - $qtdSolicitada;
        
        DB::table('medicamentos')
            ->where('id', $id_medicamento)
            ->update(['qtd' => $qtdAtualizada]);
    }

    public static function verificaQtdDisponivel($id_medicamento)
    {
        $qtd = DB::table('medicamentos')->where('id',$id_medicamento)->value('qtd');

        return $qtd;
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

        $this->atualizaEstoque($id_medicamento, $request->qtd);

        return redirect('/meus-pedidos')->with('success', 'Medicamento solicitado com sucesso!');
    }

}
