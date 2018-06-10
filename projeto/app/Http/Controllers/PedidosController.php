<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Solicitacao;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index(){
        $solicitacoes = DB::table('solicitacoes')->where('id_user', auth()->user()->id)->get();
        return view('solicitacoes.meus-pedidos',['solicitacoes' => $solicitacoes]);
    }

}
